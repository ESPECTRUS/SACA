<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Archivo Central</title>
		<meta name="Description" content=""/>
		<meta name="Keywords" content=""/>
		<meta name="Author" content=""/>
		<meta name="Robots" content=""/>
		<meta http-equiv="imagetoolbar" content="no"/>
		<link rel="stylesheet" media="screen" href="<?= base_url('templates/css/style_general.css');?>"/>	
		<link rel="stylesheet" media="screen" href="<?= base_url('templates/css/style_menu.css');?>"/>
		<link rel="stylesheet" media="screen" href="<?= base_url('templates/css/style_form.css');?>"/>
		<link rel="stylesheet" media="screen" href="<?= base_url('templates/css/style_botones.css');?>"/>
		<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	    <link rel="stylesheet" type="text/css" href="<?= base_url();?>templates/css/jquery.dataTables.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url();?>templates/css/shCore.css">
		<link rel="stylesheet" type="text/css" href="<?= base_url();?>templates/css/demo.css">
		<style type="text/css" class="init">
		</style>
		<script type="text/javascript" language="javascript" src="<?= base_url();?>templates/js/jquery.js"></script>
		<script type="text/javascript" language="javascript" src="<?= base_url();?>templates/js/jquery.dataTables.js"></script>
		<script type="text/javascript" language="javascript" src="<?= base_url();?>templates/js/shCore.js"></script>
		<script type="text/javascript" language="javascript" src="<?= base_url();?>templates/js/demo.js"></script>
		<script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>
		</head>
<body>

<div id="daddy">
	<!-- header -->
	<div id="header">
		<div id="logo">
			<a href=""><img src="<?= base_url('templates/img/images/logo.png');?>" alt="" width="318px" height="85px" /></a>
			<span id="logo-text"><a href=""></a></span>
		</div>
		<!-- menu -->
		<div id="menu">
			<ul>
				<li><a href="<?= base_url().'principal'?>" id="active">Principal</a></li>
				<li><a href="<?= base_url().'principal'?>">C.S.I.</a></li>
				<li><a href="<?= base_url().'principal'?>">C.P.I.</a></li>
				<li><a href="<?= base_url().'principal'?>">Solicitudes</a></li>
				<li><a href="<?= base_url().'principal'?>">Notificaciones</a></li>
				<li><a href="<?= base_url().'principal'?>">Devoluciones</a></li>
			</ul>
		</div>
		<!-- ticker -->
		<div id="ticker">
			<b>Unidad Ejecutora de Titulación</b> del Ministerio de Obras Públicas, Servicios y Vivienda.
		</div>
		<div class="clear"></div>
		<!-- headerimage -->
		<div id="headerimage">
			<!-- download -->
			<div id="download">
				<center>
					<div id="user-icon">
						<img src="<?= base_url('templates/img/images/user-men.png');?>">
					</div>
					<span id="download-text"><a href=""><?php echo $nic ?><br/><?php echo $nombre.' '.$apellidop.' '.$apellidom ?></a></span>
				</center>
			</div>
			<!-- icons -->
			<div id="icons">
				<a href="<?= base_url().'principal'?>" ><img src="<?= base_url('templates/img/images/icon_home.gif');?>" title="Principal" width="13" height="13" id="home" /></a>
				<a href="<?= base_url().'principal'?>"><img src="<?= base_url('templates/img/images/icon_sitemap.gif');?>" title="Configuraciones" width="13" height="13" id="sitemap" /></a>
				<a href="<?= base_url().'principal'?>"><img src="<?= base_url('templates/img/images/icon_contact.gif');?>" title="Correo Electrónico" width="13" height="13" id="contact" /></a>			
			</div>
			<div id="slogan">UNIDAD EJECUTORA DE TITULACION</div>
		</div>
	</div>
	
	<div id="content">
		<div id="cA">
			<nav class="vnav2">
	            <ul class="vnav-menu2">
	                <li class="active2">
	                    <a href="" class="vnav-item2">INICIO<span class="vnav-counter2">1</span></a>
	                    <ul class="vnav-subnav2">
	                        <li><a href="<?= base_url().'principal'?>">VOLVER A MENU PRINCIPAL</a></li>
	                    </ul>
	                </li>
	                <li class="active2">
	                    <a href="<?= base_url().'grilla'?>" class="vnav-item2">DOCUMENTO C.S.I<span class="vnav-counter2">2</span></a>
	                    <ul class="vnav-subnav2">
	                    	<li><a href="<?= base_url().'grilla'?>">LISTAR ARCHIVOS</a></li>
	                        <li><a href="<?= base_url().'registro'?>">REGISTRAR NUEVO ARCHIVO</a></li>
	                        <li><a href="<?= base_url().'registro/usuario'?>">REGISTRAR USUARIO</a></li>
	                    </ul>
	                </li>
	                <li class="active2">
	                    <a href="<?= base_url().'grilla'?>" class="vnav-item2">CONSULTAS Y REPORTES<span class="vnav-counter2">5</span></a>
	                    <ul class="vnav-subnav2">
	                        <li><a href="<?= base_url().'busquedaarchivo'?>">POR NOMBRE DE CARPETA</a></li>
	                        <li><a href="<?= base_url().'busquedanomproy'?>">POR NOMBRE PROYECTO (URBANIZACION)</a></li>
	                        <li><a href="<?= base_url().'busquedanomprod'?>">POR NOMBRE DE PRODUCTOR</a></li>
	                        <li><a href="<?= base_url().'busquedaubicacion'?>">POR UBICACION</a></li>
	                        <li><a href="<?= base_url().'busquedausuario'?>">POR USUARIOS QUE REGISTRARON</a></li>
	                    </ul>
	                </li>
	                <li class="active2">
	                    <a href="" class="vnav-item2">CUENTA DE USUARIO<span class="vnav-counter2">2</span></a>
	                    <ul class="vnav-subnav2">
	                        <li><a href="index.html">CAMBIAR CONTRASEÑA</a></li>
	                        <li><a href="<?php echo base_url() ?>login/cerrar_sesion">CERRAR SESION</a></li>
	                    </ul>
	                </li>
	            </ul>
	        </nav> 
		</div><!-- cA -->

		<div id="cB">
			<div class="titulo">LISTADO DE ARCHIVO POR NOMBRE</div>
			<form name="frmpersonal" id="frmpersonal" action="<?=base_url();?>reporte/insertar" method="post">
<div style="border-radius:4px;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;border:1px #036 solid;margin-top:4px;padding:4px 0 4px 0;overflow:auto;">
<table id="example" class="display" cellspacing="5" width="100%" style="border-radius:4px 4px 4px 4px;-moz-border-radius:4px 4px 4px 4px;-webkit-border-radius:4px 4px 4px 4px;border:1px #444444 solid;font-family:Verdana, Geneva, sans-serif;">
	<thead style="font-size:11px;color:#FFF;background-color:#444444;heigth=40px;">
		<tr>
			<th>OPERACION</th>
			<th>NRO</th>
            <th>TIPO DE CARPETA</th>
			<th width="500px">NOMBRE DE LA CARPETA</th>
			<th>NRO. DE CAJA DE ARCHIVO</th>
			<th>NRO. DE TOMO DE ARCHIVO</th>
			<th>NRO. FOJAS DE ARCHIVO</th>
			<th>CUBIERTA DE ARCHIVO</th>
		</tr>
	</thead>
	<tfoot style="font-size:11px;color:#FFF;background-color:#444444;heigth=40px;">
		<tr>
			<th>OPERACION</th>
			<th>NRO</th>
            <th>TIPO DE CARPETA</th>
			<th width="500px">NOMBRE DE LA CARPETA</th>
			<th>NRO. DE CAJA DE ARCHIVO</th>
			<th>NRO. DE TOMO DE ARCHIVO</th>
			<th>NRO. FOJAS DE ARCHIVO</th>
			<th>CUBIERTA DE ARCHIVO</th>
		</tr>
	</tfoot>
	<tbody style="font-size:11px;">

		<?php
			
				if ($result):
				

					foreach ($result->result() as $row): 
					
		?>
						<tr>
						<td>
						<a href="<?= base_url();?>reporte/reporte_por_nombre/<?php echo $row->ID_CAR; ?>" target="_blank">
						<img src="<?= base_url();?>templates/img/images/pdf.gif" title="Reporte">
						</td>
						<td align="center"><?php echo $row->ID_CAR;?></td>
						<td align="center"><?php echo $row->TIP_CAR;?></td>
						<td align="center"><?php echo $row->NOM_CAR;?></td>
						<td align="center"><?php echo $row->NCJ_ARC;?></td>
						<td align="center"><?php echo $row->NTM_ARC;?></td>
						<td align="center"><?php echo $row->FOJ_ARC;?></td>
						<td align="center"><?php echo $row->CUB_ARC;?></td>	
						</tr>					
						
		<?php endforeach; endif;?>
	</tbody>
</table>
</div>
<center>
<table>
	<tr style="height: 230px;">
		<td>
			<input type="submit" class="botones ico-btnsave" value="SOLICITUD DE ARCHIVO">
        </td>
	</tr>
</table>
    </td>
    </tr>
</table>
</center>
</div>
	<div style="clear: both;"></div>	
		<!--TIPOS DE DOCUMENTOS-->	
</form>
		</div><!-- cB -->
		<div class="Cpad">
			<br class="clear" />
		</div>
		</div><!-- Cpad -->
	</div><!-- content -->
	<div id="properspace"></div><!-- properspace -->
</div><!-- daddy -->
<div id="footer">
	<div id="foot">
		<div id="foot1"><a href="">&copy; Copyright 2015</a> - Sistemas UET</div><!-- foot1 -->
		<div id="foot2">
			<span class="valid"><a href="">LA PAZ</a> - <a href="">BOLIVIA</a></span><center>Av. Mariscal Santa Cruz Edif. Mutual la Primera <a href=""> Bloque B Piso 19 y 20<span class="star">*</span></a><br>Telf. 2 - <a href="">2141534</a> Fax. 2-<a href="">2141565</a></center>
		</div><!-- foot1 -->
	</div><!-- foot -->
</div><!-- footer -->
</body>
</html>
