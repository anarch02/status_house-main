@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="row">
                    <div class="col">
                        <h4 class="page-title">Dashboard</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dastyle</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div><!--end row-->

    <!-- end page title end breadcrumb -->
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Instuction for AI</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('updateInstruction') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="instruction">Instuction text</label>
                                    @error('instruction')
                                        <p class="text-damger">{{ $message }}</p>
                                    @enderror
                                    <textarea class="form-control" rows="10" name="instruction" id="instruction">{{ $instruction->instruction }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="btn btn-primary px-4">save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!--end col-->
    </div><!--end row-->

</div><!-- container -->
@endsection
