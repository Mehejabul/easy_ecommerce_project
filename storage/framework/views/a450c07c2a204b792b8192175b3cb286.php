<?php echo $__env->make('client.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
<div class="body">
    <?php echo $__env->make('client.layouts.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <?php echo $__env->yieldContent('content'); ?>
</div>
<?php echo $__env->make('client.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldPushContent('scripts'); ?>
<?php /**PATH /home/zariijsr/abrarmart.com/resources/views/client/layouts/main.blade.php ENDPATH**/ ?>