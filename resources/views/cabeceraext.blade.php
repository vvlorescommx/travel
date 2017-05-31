

<html lang="en">
<head>
	<script src="../js/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="../../js/jquery.foggy.min.js"></script>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body id="cabecera-layout" class="shadowplay">
	<img id="logologin" src="../images/logo_travel.png"  align="center">
	<div class="h1 center">
	<?php 
		$url= $_SERVER["REQUEST_URI"];
		$mensajes = DB::table('mensajes')->where('ruta', $url)->first();
		echo $mensajes->mensaje;
	?>


</div>
	
        <a href=""><img src="../images/cambio_de_empresa.png" title="Salir del portal" id="transfericon"></a>
	<a href="https://www.cpalumis.com.mx/cpareview/cpa/facreview"><img src="../images/rss.png" title="RSS" id="RSSicon"></a>
        <a href="/logout"><img src="../images/cerrar_sesion.png" title="Salir del portal" id="loginlogouticon"></a>
	
 @yield('content')
	
<!--	<div id="footerVision">
		<div class="leftFooterFacebook"><img src="../images/fb_logo.png" align="center">cpavisionmx</div>
		<div class="centerlogovision"><img src="../images/logo_cpavision.png" width="120px" align="center"></div>
		<div class="rightFooterTwitter"><img src="../images/twitter_logo.png" align="center">@CPA_visionmx</div>
		<img src="../images/pleca_inferior.png" width="100%;">
	</div>-->
</body>
</html>

