<?php $__env->startSection('title, HDC Events'); ?>

<?php $__env->startSection('content'); ?>

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" name="search" id="search" class= "form-control" placeholder ="Procurar...">
    </form>
</div>
<div id="envents-container" class="cold-md-12">
    <h2>Próximos Eventos</h2>
    <p class ="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card col-md-3">
            <img src="/img/events/<?php echo e($event->image); ?>" alt="<?php echo e($event->title); ?>">
            <div class="card-body">
                <p class="card-date">27/05/2022</p>
                <h5 class="card-title"><?php echo e($event->title); ?></h5>
                <p class="card-participants">X participantes</p>
                <a href="#" class= "btn btn-primary">Saber mais</a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\thiag\Desktop\Faculdade\5° SEMESTRE\DESENVOLVIMENTO WEB 2\hdcevents\resources\views/welcome.blade.php ENDPATH**/ ?>