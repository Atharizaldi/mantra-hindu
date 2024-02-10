<?php $__env->startSection('title', 'Quis'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Quis</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item active">Quis</li>
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
                            <a href="<?php echo e(base_url()); ?>quis/create" class="btn btn-sm btn-primary"><i
                                    class="fas fa-plus"></i> Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-bordered" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Question</th>
                                            <th>Answer A</th>
                                            <th>Answer B</th>
                                            <th>Answer C</th>
                                            <th>Answer D</th>
                                            <th>Answer Key</th>
                                            <th>Point</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($i + 1); ?></td>
                                                <td><p class="text-truncate"><?php echo e($item->question); ?></p></td>
                                                <td><p class="text-truncate"><?php echo e($item->answer_a); ?></p></td>
                                                <td><p class="text-truncate"><?php echo e($item->answer_b); ?></p></td>
                                                <td><p class="text-truncate"><?php echo e($item->answer_c); ?></p></td>
                                                <td><p class="text-truncate"><?php echo e($item->answer_d); ?></p></td>
                                                <td><p class="text-truncate"><?php echo e(strtoupper($item->answer_correct)); ?></p></td>
                                                <td><p class="text-truncate"><?php echo e($item->point); ?></p></td>
                                                <td>
                                                    <a href="<?php echo e(base_url()); ?>quis/edit/<?php echo e($item->id); ?>"
                                                        class="btn btn-link text-info"><i class="fas fa-edit"></i></a>
                                                    <a onclick="return confirm('Apakah anda ingin menghapus data ini?')"
                                                        href="<?php echo e(base_url()); ?>quis/delete/<?php echo e($item->id); ?>"
                                                        class="btn btn-link text-danger"><i class="fas fa-trash"></i></a>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\mantra-hindu\application\views/quis/index.blade.php ENDPATH**/ ?>