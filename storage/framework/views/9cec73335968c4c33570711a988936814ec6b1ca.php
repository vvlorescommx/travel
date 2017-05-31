<?php $__env->startSection('content'); ?>
<!--Esta debe ser la página inicial antes de iniciar sesión-->
<div class="container">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading">Bienvenido <?php echo e(@Auth::user()->name); ?></div>

                <div class="panel-body">
                   <img src="images/menu/circulo.png">
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.pie', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.cabecera', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>