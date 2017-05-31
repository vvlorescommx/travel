@extends('layouts.cabecera')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body" style="margin-top: 2.5%; text-align: center;" >
<div class="header">
        <div class="menu_bar">
            <a href="#" class="bt-menu"><span class="icon-list2"></span></a>
        </div>

        <nav>
            <ul>
                
                
                <li class="submenu">
                    <a href="#">
                        <span class="icon-rocket"></span>Autorización<span class="caret icon-arrow-down6"></span>
                    </a>
                    <ul class="children">
                        <li><a href="/autorizaciones/creacionpsv">Creación de proyectos, subproyectos y viajes<span class="icon-dot"></span></a></li>
                        <li><a href="#">Autorizar gastos de viaje<span class="icon-dot"></span></a></li>
                      <!--  <li><a href="#">Sub Elemento #3 <span class="icon-dot"></span></a></li> !-->
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <span class="icon-rocket"></span>Estados de cuenta<span class="caret icon-arrow-down6"></span>
                    </a>
                    <ul class="children">
                        <li><a href="#">Consulta de estados de cuenta<span class="icon-dot"></span></a></li>                       
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <span class="icon-rocket"></span>Políticas<span class="caret icon-arrow-down6"></span>
                    </a>
                    <ul class="children">
                        <li><a href="#">Etiquetas<span class="icon-dot"></span></a></li>  
                        <li><a href="#">Definir cobro de gastos no comprobados<span class="icon-dot"></span></a></li> 
                        <li><a href="#">Definir niveles de autorización<span class="icon-dot"></span></a></li>                        
                    </ul>
                </li>    


                <li class="submenu">
                    <a href="#">
                        <span class="icon-rocket"></span>Registro y conciliación<span class="caret icon-arrow-down6"></span>
                    </a>
                    <ul class="children">
                        <li><a href="#">Historial de registros<span class="icon-dot"></span></a></li>                       
                    </ul>
                </li>
            </ul>
        </nav>
    </div>


                
 <img src="images/menu/circulo.png" alt="menu" usemap="#mapaMenu" style="padding-top:3%;"/>
        <map name="mapaMenu">
           <area alt="Autorizaciones" title="Autorizaciones"   
             shape="rect" coords="0, 0, 230, 140" href="autorizaciones/solicitud" style="background-color: #000000;"/>
        </map>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.pie')
