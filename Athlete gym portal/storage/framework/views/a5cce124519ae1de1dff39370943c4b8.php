<?php $__env->startSection('title', __('Unauthorized')); ?>
<?php $__env->startSection('code', '401'); ?>
<?php $__env->startSection('message', __('Only users with Administrator roles can access this page')); ?>

<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rafaelfernandez/Pictures/Athlete gym portal/resources/views/errors/401.blade.php ENDPATH**/ ?>