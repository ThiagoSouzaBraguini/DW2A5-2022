

<?php $__env->startSection('title', 'Produtos'); ?>

<?php $__env->startSection('content'); ?>
<h1>Página de Produtos</h1>
<?php if($busca != ''): ?>
<p>O usuário está buscando por: <?php echo e($busca); ?></p>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\thiag\Desktop\Faculdade\5° SEMESTRE\DESENVOLVIMENTO WEB 2\hdcevents\resources\views/products.blade.php ENDPATH**/ ?>