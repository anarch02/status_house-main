<?php

namespace App\Telegram;

use App\Models\Chat;
use App\Models\Instruction;
use App\Models\Message;
use GeminiAPI\Client;
use GeminiAPI\Resources\ModelName;
use GeminiAPI\Resources\Parts\TextPart;
use DefStudio\Telegraph\Facades\Telegraph;
use Illuminate\Support\Stringable;
use DefStudio\Telegraph\Handlers\WebhookHandler;

class Handler extends WebhookHandler
{
    public function start()
    {
        $text = 'Введите ваше имя';
        $this->reply($text);
        Message::create(['text' => $text, 'chat_id' => $this->chat->id, 'is_bot' => true]);
    }

    protected function handleChatMessage(Stringable $text): void
    {
        Telegraph::chat($this->chat)
            ->chatAction('typing')
            ->send();

        switch ($this->chat->state) {
            case Chat::STATE_AWAITING_NAME:
                $messsage = 'Введите ваш номер телефона';

                $this->chat->update(['full_name' => $text, 'state' => Chat::STATE_AWAITING_PHONE]);
                $this->reply($messsage);

                Message::create(['text' => $messsage, 'chat_id' => $this->chat->id, 'is_bot' => true]);
                break;
            case Chat::STATE_AWAITING_PHONE:
                $messsage = 'Спасибо за регистрацию. Добро пожаловать! Готов ответить на ваши вопросы по квартирам у моря. Что вас интересует?';
                $this->chat->update(['phone' => $text, 'state' => Chat::STATE_COMPLETED]);
                $this->reply($messsage);
                Message::create(['text' => $messsage, 'chat_id' => $this->chat->id, 'is_bot' => true]);
                break;
            default:
                $this->ai($text);
        }

        Message::create(['text' => $text, 'chat_id' => $this->chat->id, 'is_bot' => false]);
    }

    protected function handleUnknownCommand(Stringable $text): void
    {
        $messsage = 'Вы ввели неизвестную команду';
        $this->reply($messsage);

        Message::create(['text' => $messsage, 'chat_id' => $this->chat->id, 'is_bot' => true]);
    }

    private function ai(string $text)
    {
        $instruction = Instruction::where('is_active', 1)->first();
        $client = new Client(env('GEMINI_API_KEY'));
        $response = $client->withV1BetaVersion()
            ->generativeModel(ModelName::GEMINI_1_5_FLASH)
            ->withSystemInstruction($instruction->instruction)
            ->generateContent(
                new TextPart($text),
            );

        $this->reply($response->text());

        Message::create(['text' => $response->text(), 'chat_id' => $this->chat->id, 'is_bot' => true]);
    }
}
