

<?php $__env->startSection('content'); ?>

<h1>Cart</h1>
<form action="<?php echo e(route('cart.cookie.update')); ?>" method="POST">
<?php echo csrf_field(); ?>
<?php echo method_field('PATCH'); ?>    
<table border=1>
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        
            <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td>
                <p><?php echo e($cartItem["product"]["name"]); ?></p>
                <div><img src='<?php echo e($cartItem["product"]["imageUrl"]); ?>' style="width:100px;"></div>

            </td>
            <td>$ <?php echo e($cartItem["product"]["price"]); ?></td>
            <td>
                <input type="number" name='product_<?php echo e($cartItem["product"]["id"]); ?>' mix="1" value='<?php echo e($cartItem["quantity"]); ?>'>
            </td>
            <td>
                <button type="button" class="cartDeleteBtn" data-id='<?php echo e($cartItem["product"]["id"]); ?>'>delete</button>
            </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </tbody>
</table>
<hr/>
<button type="submit">Update</button>
</form>
<br/>
<a href="./products">back to Product List</a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('inline_js'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('inline_js'); ?>
    <script>
        initCartDeleteButton("<?php echo e(route('cart.cookie.delete')); ?>")
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Documents\sandwich\sd_learn\resources\views/cart/index.blade.php ENDPATH**/ ?>