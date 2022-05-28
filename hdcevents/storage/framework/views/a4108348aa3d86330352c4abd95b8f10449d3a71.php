

<?php $__env->startSection('title, Produto'); ?>

<?php $__env->startSection('content'); ?>

<?php if($id != null): ?>
<p>Exibindo produto com id: <?php echo e($id); ?></p>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\thiag\Desktop\Faculdade\5° SEMESTRE\DESENVOLVIMENTO WEB 2\hdcevents\resources\views/product.blade.php ENDPATH**/ ?>