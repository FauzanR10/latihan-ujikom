

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Daftar Customer</h2>
        <a href="<?php echo e(route('customers.create')); ?>" class="btn btn-primary">Tambah Customer</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($customer->id_customer); ?></td>
                        <td><?php echo e($customer->nama_customer); ?></td>
                        <td><?php echo e($customer->alamat); ?></td>
                        <td><?php echo e($customer->telp); ?></td>
                        <td><?php echo e($customer->email); ?></td>
                        <td>
                            <a href="<?php echo e(route('customers.edit', $customer->id_customer)); ?>" class="btn btn-warning">Edit</a>
                            <form action="<?php echo e(route('customers.destroy', $customer->id_customer)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus customer ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\pengadaan-barang\resources\views/customers/index.blade.php ENDPATH**/ ?>