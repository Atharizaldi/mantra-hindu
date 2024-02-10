@extends('layouts.app')

@section('title', 'Add Users')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item active">Add Users</li>
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
                    <form action="{{ base_url() }}users/store" method="POST" enctype="multipart/form-data"
                        class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Name<span class="text-danger">*</span></label>
                                <input type="text" name="name" id="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Username<span class="text-danger">*</span></label>
                                <input type="text" name="username" id="" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password<span class="text-danger">*</span></label>
                                <input type="text" name="password" id="" class="form-control" required>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <a href="{{ base_url() }}users" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
