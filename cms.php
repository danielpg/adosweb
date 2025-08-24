<?php
$view = preg_replace('/[^a-zA-Z0-9\s]/', '', $_GET['view']);
if(strlen($view) > 32 ) $view = "main";
if(!file_exists($view.".php")) $view = "main";
ob_start();
include $_GET['view'].'.php';
$content = ob_get_contents();
ob_end_clean();
//$content = file_get_contents($_GET['view'].'.php');
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<title>Ados Telecom</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/principal.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="css/galleriffic-2.css" media="screen" />
	<script type="text/javascript">var _siteRoot='index.html',_root='index.html';</script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/jquery.galleriffic.js"></script>
	<script type="text/javascript" src="js/jquery.opacityrollover.js"></script>

	<style>	#div_area{		position:relative;		top:-80px;		background:white;	}
	</style>
</head>
<body>

	<div id="div_top">
		<div id="div_logo">
			<img src="images/principal/logo.png" class="img"></img>
		</div>
		<div id="div_menu">
			<div id="div_container-navigation">
				<ul class="sf-menu">
					<li><a href="index.html">INICIO</a></li>
					<li><a href="cms.php?view=aboutus">QUIENES SOMOS</a></li>
					<li><a href="cms.php?view=products">PRODUCTOS</a></li>
					<li><a href="cms.php?view=services">SERVICIOS</a></li>
					<li><a href="cms.php?view=contactus">CONTACTENOS</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="div_area_animation" style="height:90px">
		<div id="div_animation" style="height:90px">
		
		</div>
	</div>
	
	<div id="div_area" sstyle="height:800px">
	&nbsp;<br><br>
		
		<div id="div_column_left" style="float:left;width:842px;border-left:1px solid #ddd;border-right:1px solid #ddd;padding-left:12px">
			

		<?php echo $content ?>
			
		</div>
		<div style="display:none;float:left;Text-align:center;margin-left:20px">
			<img src="images/principal/cert2.gif"><br><br>
			<img src="images/principal/cert3.png"><br><br>
		</div>
		<div style="clear:both"></div>
	</div>
	<div id="div_bottom">
		Copyright 2025 - ADOS TELECOM
	</div>
</body>
</html>
