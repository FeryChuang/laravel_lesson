<html>
    <head>
        <title>Laravel Controller Practice</title>
        <?php echo $__env->make('layouts.meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>

    <body>
        <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <?php $__env->startSection('inline_js'); ?>
        <?php echo $__env->yieldSection(); ?>
    </body>
</html><?php /**PATH C:\Users\pc\Documents\sandwich\sd_learn\resources\views/layouts/app.blade.php ENDPATH**/ ?>