<?php $__env->startSection('content'); ?>

<style>

.oculto
{
 display: none;
}

.fondoRotulos
{
    height: 50px;
    border-width: thin;
    background-color: #2e3890;
    border-style: solid;
    border-color: #2e3890;    
    border-radius: 15px 15px;
    margin-bottom: 10px;
}


.fondoTuplas
{
    height: 50px;
    background-color: #fff;
    margin-bottom: 10px;
    border-bottom: thin solid #2e3890;
}

.rotulosTablaProyectos
{
    width:25%;
    color: #fff;
    text-align: center;
    float:  left;
    font-size: 150%;
    padding-top: .7%;
}


.tuplasTablaProyectos
{
    width:25%;
    color: #000;
    text-align: center;
    float:  left;
    font-size: 150%;
    height: 50px;
    margin-top: .7%;  
    vertical-align: middle;
}

.tuplaOculta
{

display: none;
}



</style>
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <script src="../js/jquery.ui.datepicker-es-MX.js"></script>

<script lang="javascript">

      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });


  function mostrar(id) {
  $( "#"+id ).show( "slow");
}

function ocultar(id) {
  $( "#"+id ).hide( "slow");
  $("#agregarProyectoForm")[0].reset();

}


 function guardaProyecto() {

     var f = $(this);
     var formData = new FormData(document.getElementById("agregarProyectoForm"));

      $.ajax({
         type: 'POST',
         url: "<?php echo e(url('/autorizaciones/guardarproyecto')); ?>",
        
                 type: "post",
                 dataType: "json",
                 data: formData,
                 cache: false,
                 contentType: false,
                 processData: false
             
            }).done(function (msg)  {
                alert("Se ha creado el proyecto con éxito");
                ocultar('formaProyecto');
                location.reload();
        });
   
}
      
  



</script>


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="h2" style="padding-top: 5%">Usuario: <?php echo e(@Auth::user()->name); ?></div>
                
                <div style="clear: both; "></div>
               
              <div class="panel-body">
                        <h2>Proyectos</h2>    

                        <div class="fondoRotulos">
                         <div class="rotulosTablaProyectos">Nombre Proyecto</div>
                         <div class="rotulosTablaProyectos">Responsable</div>
                         <div class="rotulosTablaProyectos">Status</div>
                         <div class="rotulosTablaProyectos">Acciones</div>
                        </div>


                        <?php
                        $proyectos = DB::table('Proyectos')->get();  
                        ?>




                        <?php foreach($proyectos as $proyecto): ?>
                         <?php if($proyecto->status == 1): ?>
                         <?php $status="Activo";?>
                         <?php else: ?>
                         <?php $status="Inactivo";?>
                         <?php endif; ?>


                        <?php
                        $responsable = DB::table('Usuarios')->where('idUsuario', $proyecto->idResponsable)->first(); 
                        ?>

                        <div class="fondoTuplas">
                         <div class="tuplasTablaProyectos"><?php echo e($proyecto->nombreProyecto); ?></div>
                         <div class="tuplasTablaProyectos"><?php echo e($responsable->nombresUsuario); ?> <?php echo e($responsable->apellidosUsuario); ?></div>
                         <div class="tuplasTablaProyectos"><?php echo e($status); ?></div>
                         <div class="tuplasTablaProyectos"><img src="../images/editar.png" style="width:33px;"/><img src="../images/cancelar.png" style="width:30px;"/></div>
                        </div>
                        <?php endforeach; ?>

                        
                        <div class="fondoTuplas oculto" id="formaProyecto">
                        <form name="agregarProyectoForm" id="agregarProyectoForm" method="post">

                         <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"></input>
                         <div class="tuplasTablaProyectos"><input type="text" name="nombreProyecto" id="nombreProyecto" placeholder="Nombre Proyecto" /></div>
                         <div class="tuplasTablaProyectos">
                           <?php
                            $usuarios = DB::table('Usuarios')->get();  
                            ?>

                         <select name="ResponsableProyecto" id="ResponsableProyecto" style="width:35%"/>
                         <option value="">-- Seleccione --</option>
                            <?php foreach($usuarios as $usuario): ?>
                            <option value="<?php echo e($usuario->idUsuario); ?>"><?php echo e($usuario->nombresUsuario); ?> <?php echo e($usuario->apellidosUsuario); ?></option>
                            <?php endforeach; ?>
                         </select>
                         </div>
                         <div class="tuplasTablaProyectos"><input type="text" name="status" id="status" value="activo" readonly="readonly" style="width:25%"/></div>
                         <div class="tuplasTablaProyectos"><img src="../images/guardar.png" id="guardarProyecto" onclick="guardaProyecto()" style="width:30px;"/><img src="../images/cancelar.png" style="width:30px;"  /></div>
                         </form>
                        </div>
                        

                      <div class="fondoTuplas">
                      
                      <div style="float: right; padding-right: 8%; width:95%;">
                        <p style="color:#099c7f; float:right;  font-size: 150%;" >Agregar</p>            
                      <img src="../images/agregar.png" onclick="mostrar('formaProyecto');"  style="width:32px;float:right;padding-right:1%"/>
                      
                    </div>
                      </div>

            
                </div>



                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('pieext', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('cabeceraext', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>