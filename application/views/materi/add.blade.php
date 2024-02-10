@extends('layouts.app')

@section('title', 'Add Materi')

@section('header')
    <link rel="stylesheet" href="{{ base_url() }}assets/admin-template/plugins/summernote/summernote-bs4.min.css">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Materi</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Materi</li>
                        <li class="breadcrumb-item active">Add Materi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <form action="{{ base_url() }}home/store" method="POST" enctype="multipart/form-data" class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Title<span class="text-danger">*</span></label>
                                <input type="text" name="title" id="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Type<span class="text-danger">*</span></label>
                                <select name="type" id="" class="form-control">
                                    @foreach (['text', 'audio'] as $item)
                                        <option value="{{ $item }}">{{ ucwords($item) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Content Text<span class="text-danger">*</span></label>
                                <textarea name="content" id="content-text"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Content Audio<span class="text-danger">*</span></label>
                                <input type="file" name="audio" id="" accept="audio/*" class="form-control">
                            </div>
                        </div>
						<div class="card-footer text-right">
							<a href="{{ base_url() }}" class="btn btn-secondary">Cancel</a>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('footer')
    <script src="{{ base_url() }}assets/admin-template/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $('#content-text').summernote({
            height: 150,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ol', 'ul', 'paragraph', 'height']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['undo', 'redo', 'fullscreen', 'codeview', 'help']]
            ]
        })

        if ($("select[name=type]").val() == 'audio') {
            $("textarea[name=content]").parent().addClass('d-none');
            $("input[name=audio]").parent().removeClass('d-none');

            $("textarea[name=content]").prop('required', false);
            $("input[name=audio]").prop('required', true);
        } else {
            $("textarea[name=content]").parent().removeClass('d-none');
            $("input[name=audio]").parent().addClass('d-none');

            $("textarea[name=content]").prop('required', true);
            $("input[name=audio]").prop('required', false);
        }

        $("select[name=type]").change(function() {
            if ($(this).val() == 'audio') {
                $("textarea[name=content]").parent().addClass('d-none');
                $("input[name=audio]").parent().removeClass('d-none');

                $("textarea[name=content]").prop('required', false);
                $("input[name=audio]").prop('required', true);
            } else {
                $("textarea[name=content]").parent().removeClass('d-none');
                $("input[name=audio]").parent().addClass('d-none');

                $("textarea[name=content]").prop('required', true);
                $("input[name=audio]").prop('required', false);
            }
        });
    </script>
@endsection
