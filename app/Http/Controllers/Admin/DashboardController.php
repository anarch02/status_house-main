<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instruction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $instruction = Instruction::get()->first();
        return view('admin.dashboard', compact('instruction'));
    }

    public function updateInstruction(Request $request)
    {
        $request->validate([
            'instruction' => ['required']
        ]);

        $instruction = Instruction::get()->first();
        $instruction->update([
            'instruction' => $request->instruction
        ]);

        return view('admin.dashboard', compact('instruction'));
    }
}
