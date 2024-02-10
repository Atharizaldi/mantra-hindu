@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ base_url() }}users/create" class="btn btn-sm btn-primary"><i
                                    class="fas fa-plus"></i> Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Point</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $i => $item)
                                            <tr>
                                                <td>{{ $i + 1 }}</td>
                                                <td><img src="{{ base_url() }}assets/image/{{ $item->image }}"
                                                        alt="" width="50" height="50"
                                                        style="border-radius: 10000px;"></td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->username }}</td>
                                                <td>{{ $item->point }} Pt</td>
                                                <td>
                                                    <a href="{{ base_url() }}users/edit/{{ $item->id }}"
                                                        class="btn btn-link text-info"><i class="fas fa-edit"></i></a>
                                                    @if ($item->id != '1')
                                                        <a onclick="return confirm('Apakah anda ingin menghapus data ini?')"
                                                            href="{{ base_url() }}users/delete/{{ $item->id }}"
                                                            class="btn btn-link text-danger"><i
                                                                class="fas fa-trash"></i></a>
                                                    @endif

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
