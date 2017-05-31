<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script src="../js/jquery.ui.datepicker-es-MX.js"></script>
  <script>
  $( function() {
    $( "#datepicker1, #datepicker2" ).datepicker();
  } );
  </script>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="h2" style="padding-top: 5%">Usuario: <?php echo e(@Auth::user()->name); ?></div>
                <div style="width:100%">
<div style="float:right; width: 50px; height:50px; border-radius: 10px 10px 10px 10px;
                -moz-border-radius: 10px 10px 10px 10px;
                -webkit-border-radius: 10px 10px 10px 10px;
                border: 1px solid #5e00ff; text-align:center;"><div style="font-size: 250%;">7</div>  días</div>
                <div style="float: right;">
                
                <p>Fin: <img src="../images/cal.png" style="width:25px;"/><input type="text" id="datepicker2" style="width:50%"></p></div>
                    <div style="float: right;"><p> Fecha de viaje   Inicio: <img src="../images/cal.png" style="width:25px;"/><input type="text" id="datepicker1" style="width:35%"></p></div> 



                </div>
                <div style="clear: both; "></div>
               
                <div class="panel-body" style="margin-top: 2.5%;" >

 <div style="width:100%">

                <div style="float: right; padding-right: 10px;""> <span style="font-size: 120%">Viaje: 1234</span></div>
                

                <div style="float: right; padding-right: 10px;"> <label for="subproyecto" style="padding-right: 10px;">Subproyecto</label><select name="subproyecto">
                <option value="">Seleccione subproyecto</option>
                </select></div>

                <div style="float: right; padding-right: 10px;"> <label for="proyecto" style="padding-right: 10px;">Proyecto</label> <select name="proyecto">
                <option value="">Seleccione proyecto</option>
                </select></div>

               
</div>
<div style="width:100%; clear:both">
<div style="float: right;"> 
<label for="acompanantes" style="color:#099c7f; font-size: 120%; padding-right: 10px;">Acompañantes</label><select name="acompanantes">
                <option value="">Seleccione acompañantes</option>
                </select></div>
</div>


                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('pieext', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('cabeceraext', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>