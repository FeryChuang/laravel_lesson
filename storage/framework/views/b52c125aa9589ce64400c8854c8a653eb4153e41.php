

<?php $__env->startSection('content'); ?>

<h1>Create</h1>
<form method="post" action="<?php echo e(route('products.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div>
        <label>
            product name:<input type="text" name="product_name" value="<?php echo e(old('product_name')); ?>" />
        </label>
    </div>
    <div>
        <label>
            product price:<input type="numver" name="product_price" value="<?php echo e(old('product_price')); ?>" />
        </label>
    </div>
    <div>
        <label>
            product image:<input type="file" name="product_image" />
        </label>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
<?php $__env->stopSection(); ?>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Documents\sandwich\sd_learn\resources\views/product/create.blade.php ENDPATH**/ ?>