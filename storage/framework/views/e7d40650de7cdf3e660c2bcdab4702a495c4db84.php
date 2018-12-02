<?php $__env->startSection('content'); ?>

<div class="container">
<form class="" action="<?php echo e(route('barang.store')); ?>" method="post">
<?php echo e(csrf_field()); ?>

<div class="form-group">
<label for="">Nama Barang</label>
<input type="text" class="form-control" name="nama_barang" placeholder="Masukkan nama barang.." >
</div>

<div class="form-group">
<label for="">Deskripsi</label>
<textarea cols="40" rows="7" class="form-control" name="deskripsi" placeholder="Masukkan deskripsi barang.."></textarea>
</div>

<div class="form-group">
<input type="submit" value="Simpan" class="btn btn-primary">
</div>

</form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>