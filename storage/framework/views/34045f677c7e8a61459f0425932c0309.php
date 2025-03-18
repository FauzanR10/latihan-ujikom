

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Tambah Customer</h2>
        <form action="<?php echo e(route('customers.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <label for="nama_customer">Nama:</label>
            <input type="text" name="nama_customer" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" required>
        
            <label for="telepon">Telepon:</label>
            <input type="text" name="telepon" required>
        
            <button type="submit">Simpan</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\pengadaan-barang\resources\views/customers/create.blade.php ENDPATH**/ ?>