

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Edit Customer</h2>
        <form action="<?php echo e(route('customers.update', $customer->id_customer)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-3">
                <label for="nama_customer" class="form-label">Nama Customer</label>
                <input type="text" name="nama_customer" class="form-control" value="<?php echo e($customer->nama_customer); ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="<?php echo e($customer->alamat); ?>" required>
            </div>
            <div class="mb-3">
                <label for="telp" class="form-label">Telepon</label>
                <input type="text" name="telp" class="form-control" value="<?php echo e($customer->telp); ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo e($customer->email); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?php echo e(route('customers.index')); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\pengadaan-barang\resources\views/customers/edit.blade.php ENDPATH**/ ?>