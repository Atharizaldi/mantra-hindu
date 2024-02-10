<?php $__env->startSection('title', 'Users'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        
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
                            <a href="<?php echo e(base_url()); ?>users/create" class="btn btn-sm btn-primary"><i
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
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($i + 1); ?></td>
                                                <td><img src="<?php echo e(base_url()); ?>assets/image/<?php echo e($item->image); ?>"
                                                        alt="" width="50" height="50"
                                                        style="border-radius: 10000px;"></td>
                                                <td><?php echo e($item->name); ?></td>
                                                <td><?php echo e($item->username); ?></td>
                                                <td><?php echo e($item->point); ?> Pt</td>
                                                <td>
                                                    <a href="<?php echo e(base_url()); ?>users/edit/<?php echo e($item->id); ?>"
                                                        class="btn btn-link text-info"><i class="fas fa-edit"></i></a>
                                                    <?php if($item->id != '1'): ?>
                                                        <a onclick="return confirm('Apakah anda ingin menghapus data ini?')"
                                                            href="<?php echo e(base_url()); ?>users/delete/<?php echo e($item->id); ?>"
                                                            class="btn btn-link text-danger"><i
                                                                class="fas fa-trash"></i></a>
                                                    <?php endif; ?>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mantra-hindu\application\views/users/index.blade.php ENDPATH**/ ?>