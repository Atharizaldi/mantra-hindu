@extends('layouts.app')

@section('title', 'Add Quis')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Quis</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Quis</li>
                        <li class="breadcrumb-item active">Add Quis</li>
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
                    <form action="{{ base_url() }}quis/store" method="POST" class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Question<span class="text-danger">*</span></label>
                                <input type="text" name="question" id="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Answer A<span class="text-danger">*</span> <input type="radio" name="answer_correct" value="a" id=""></label>
                                <input type="text" name="answer_a" id="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Answer B<span class="text-danger">*</span> <input type="radio" name="answer_correct" value="b" id=""></label>
                                <input type="text" name="answer_b" id="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Answer C<span class="text-danger">*</span> <input type="radio" name="answer_correct" value="c" id=""></label>
                                <input type="text" name="answer_c" id="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Answer D<span class="text-danger">*</span> <input type="radio" name="answer_correct" value="d" id=""></label>
                                <input type="text" name="answer_d" id="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Point<span class="text-danger">*</span></label>
                                <input type="number" name="point" id="" class="form-control" required>
                            </div>
                        </div>
						<div class="card-footer text-right">
							<a href="{{ base_url() }}quis" class="btn btn-secondary">Cancel</a>
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
