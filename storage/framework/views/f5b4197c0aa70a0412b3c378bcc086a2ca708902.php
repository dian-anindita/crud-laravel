<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
                <div class="panel-heading">Edit Data Barang</div>
    <div class="panel-body">
    <form class="" action="<?php echo e(route('barang.update', $barang)); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PATCH')); ?>

<div class="form-group">
<label for="">Nama Barang</label>
<input type="text" class="form-control" name="nama_barang" placeholder="Masukkan nama barang.." value="<?php echo e($barang->nama_barang); ?>">
</div>

<div class="form-group">
<label for="">Gambar</label>
<input type="text" class="form-control" name="gambar" placeholder="Masukkan gambar.." value="<?php echo e($barang->gambar); ?>">
</div>

<div class="form-group">
<input type="submit" value="Simpan" class="btn btn-primary">
</div>
</form>
    </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>