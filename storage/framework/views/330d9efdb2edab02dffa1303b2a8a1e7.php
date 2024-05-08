<?php echo $__env->make('layout.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layout.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layout.include.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?><?php /**PATH C:\Users\arraf\OneDrive\Dokumen\All about back end\PaymentGateway 3\kkp-azaru\resources\views/layout/base.blade.php ENDPATH**/ ?>