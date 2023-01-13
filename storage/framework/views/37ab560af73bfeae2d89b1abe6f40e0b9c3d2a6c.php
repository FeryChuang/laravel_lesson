

<?php $__env->startSection('content'); ?>

<h1>Products</h1>
<div>
<a href="<?php echo e(route('products.create')); ?>">Create</a>
</div>
<hr/>
<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
    <div>
    <a href="<?php echo e(route('products.show', ['product' => $product['id']])); ?>">
        <img height="400" src="<?php echo e($product['imageUrl']); ?>">
    </a>
    </div>
    <div>
        <a href="<?php echo e(route('products.edit', ['product' => $product['id']])); ?>">Edit</a>
        <form method="post" action="<?php echo e(route('products.destroy',['product' => $product['id']])); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            
            <button type="submit">delete</button>
        </form>
    
    </div>
    
    <hr/>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('inline_js'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('inline_js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Documents\sandwich\sd_learn\resources\views/product/index.blade.php ENDPATH**/ ?>