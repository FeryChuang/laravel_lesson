

<?php $__env->startSection('content'); ?>

<h1><?php echo e($product['name']); ?></h1>
<img height="400" src="<?php echo e($product['imageUrl']); ?>">
<div style="margin: 36px 0;">
    <p style="font-size: 30px;">price: <?php echo e($product['price']); ?></p>
    <input type="number" name="quantity" min="1" value="1"/>
    <button type="button" id="addToCart">Add to cart</button>
    <br/>
    <a href="../cart">Cart</a>
    <br/>
    <a href="../products">back to Product List</a>
</div>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('inline_js'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('inline_js'); ?>
    <script>
        var productId = "<?php echo e($product['id']); ?>"
        initAddToCart(productId)
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Documents\sandwich\sd_learn\resources\views/product/show.blade.php ENDPATH**/ ?>