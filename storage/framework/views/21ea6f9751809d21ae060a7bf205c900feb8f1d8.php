<?php $__env->startSection('content'); ?>
<main id="home">
    <h1>home page</h1>
    <div class="card">
        <p class="title">title</p>
        <div class="description">
            <a href="./products">Products</a>
            <a href="./cart">Cart</a>
            <p>description description</P>
        </div>
    </div>
    <br/>
    <P>outside~</P>
    <div id="main"></div>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('inline-js'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('inline-js'); ?>
    
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\pc\Documents\sandwich\sd_learn\resources\views/home.blade.php ENDPATH**/ ?>