<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Data Barang</div>
<div class="panel-body">
<a href="<?php echo e(route('barang.store')); ?>" class="btn btn-danger"/>Tambah data Barang</a><br><br>
<table class="table table-bordered">
<thead>
    <th>No.</th>
    <th align="center">Nama Barang</th>
    <th align="center">Deskripsi</th>
    <th colspan="2" align="center">Action</th>
</thead>
<tbody>
<?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($barang->id); ?></td>
        <td><?php echo e($barang->nama_barang); ?></td>
        <td><?php echo e($barang->deskripsi); ?></td>
        <td><a class="btn btn-success"  href="<?php echo e(action('BarangController@edit', $barang['id'])); ?>"/>Edit</a></td>
		<td>
          <form action="<?php echo e(action('BarangController@destroy', $barang['id'])); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>