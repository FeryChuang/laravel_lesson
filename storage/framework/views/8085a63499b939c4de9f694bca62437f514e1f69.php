

<?php $__env->startSection('content'); ?>

<h1>Edit</h1>
<img height="400" src="<?php echo e($product['imageUrl']); ?>">
<hr/>
<form method="post" action="<?php echo e(route('products.update',['product' => $product['id']])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PATCH'); ?>
    <input type="text" name="title" />
    <button type="submit">Submit</button>
</form>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('inline_js'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('inline_js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Documents\sandwich\sd_learn\resources\views/product/edit.blade.php ENDPATH**/ ?>