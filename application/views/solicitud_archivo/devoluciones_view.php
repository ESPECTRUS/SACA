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
		<link rel="stylesheet" media="screen" href="<?= base_url('templates/css/style_botones.css');?>"/>
		<link rel="stylesheet" media="screen" href="<?= base_url('templates/css/style_form.css');?>"/>
		<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
				<script type="text/javascript" src="<?= base_url();?>/templates/js/jquery_1.4.js"></script>
		<script type="text/javascript" src="<?= base_url();?>/templates/js/jquery_validate.js"></script>
		<script type="text/javascript" src="<?= base_url();?>/templates/js/validaciones.js"></script>


		<!--Datepicker-->
		<link rel="stylesheet" href="<?= base_url('templates/js/date/themes/base/ui.all.css');?>"/>
		<script type="text/javascript" src="<?= base_url();?>/templates/js/date/ui/ui.datepicker.js"></script>
		
		
		<!--Validacion de campos-->
		<script type="text/javascript">
			$(
			   function()
			   {
					$('#frmsolicitud').validate
					(
					 	{
							rules:
							{
							'fec_ret': {required: true},
							'tip_ret': {required: true},
							'fec_ent': {required: true},
							'obs_ret': {required: true}

							},
							messages: 
							{
							'fec_ret':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'tip_ret':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'fec_ent':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'obs_ret':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							},
							debug: true,
							submitHandler: function(form)
							{
								document.getElementById("frmsolicitud").submit();
							}
					 	}
					);
				}
			);
		</script>
		<!--Datepicker-->
		<script type="text/javascript">
			$(function() {
			$('.datepicker').datepicker
				({
				monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
				monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "Mar", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
				dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
				
				dateFormat:'yy/mm/dd',
				beforeShowDay: $ .datepicker.noWeekends,
				changeMonth: true,
				changeYear: true,
				firstDay: 1,
				yearRange: "1900:2025",
				beforeShow :  function (){     
		        $ ( ".ui-datepicker" ). css ( 'font-size' ,  12 )  
		    	} 
			});
			});
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
				<li><a href="" id="active">Principal</a></li>
				<li><a href="">C.S.I.</a></li>
				<li><a href="">C.P.I.</a></li>
				<li><a href="">Solicitudes</a></li>
				<li><a href="">Notificaciones</a></li>
				<li><a href="">Devoluciones</a></li>
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
					<span id="download-text"><a href="">eajahuanca.uet<br/>Edwin Ajahuanca Callisaya</a></span>
				</center>
			</div>
			<!-- icons -->
			<div id="icons">
				<a href="" ><img src="<?= base_url('templates/img/images/icon_home.gif');?>" title="Principal" width="13" height="13" id="home" /></a>
				<a href=""><img src="<?= base_url('templates/img/images/icon_sitemap.gif');?>" title="Configuraciones" width="13" height="13" id="sitemap" /></a>
				<a href=""><img src="<?= base_url('templates/img/images/icon_contact.gif');?>" title="Correo Electrónico" width="13" height="13" id="contact" /></a>			
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
	                        <li><a href="">VOLVER A MENU PRINCIPAL</a></li>
	                    </ul>
	                </li>
	                <li class="active2">
	                    <a href="" class="vnav-item2">SOLICITUDES<span class="vnav-counter2">2</span></a>
	                    <ul class="vnav-subnav2">
	                        <li><a href="index.html">SOLICITUDES DE RETIRO REALIZADAS</a></li>
	                        <li><a href="index.html">SOLICITUDES DE RETIRO RESPONDIDAS</a></li>
	                    </ul>
	                </li>
	                <li class="active2">
	                    <a href="" class="vnav-item2">CONSULTAS Y REPORTES<span class="vnav-counter2">5</span></a>
	                    <ul class="vnav-subnav2">
	                        <li><a href="index.html">FECHA DE REGISTRO</a></li>
	                        <li><a href="index.html">NOMBRE COMPLETO O CI</a></li>
	                        <li><a href="index.html">POR PROFESION</a></li>
	                        <li><a href="index.html">GENERO (M/F)</a></li>
	                        <li><a href="index.html">POR ESTADO</a></li>
	                    </ul>
	                </li>
	                <li class="active2">
	                    <a href="" class="vnav-item2">CUENTA DE USUARIO<span class="vnav-counter2">2</span></a>
	                    <ul class="vnav-subnav2">
	                        <li><a href="index.html">CAMBIAR CONTRASEÑA</a></li>
	                        <li><a href="index.html">CERRAR SESION</a></li>
	                    </ul>
	                </li>
	            </ul>
	        </nav> 
		</div><!-- cA -->
		<div id="cB">
			<div class="titulo">REGISTRAR DEVOLUCION DE ARCHIVOS - CSI</div>
			<form name="frmsolicitud" id="frmsolicitud" action="<?=base_url();?>solicitud/insertar" method="post">
				<fieldset class="fieldcuerpo" align="left">
					<legend> DATOS DE DEVOLUCION </legend>
					<table >
						<tr style="height: 30px;">
							<td width="100px" class="lblnombre">Fecha de Devolucion</td>
							<td width="240px" ><input type="text" name="fec_ret" class="txtcampo datepicker" readonly="" placeholder="FECHA INICIAL" ></td>
						</tr>
						</table>
						<table>
						<tr>
							<td width="100px" class="lblnombre">Observaciones</td>
							<td width="500px">
								<textarea name="obs_ret" rows="600" cols="300px" class="txtselect" onkeypress="return alfanumerico(event);" onpaste="return false"></textarea> 
							</td>
						</tr>
					</table>
				</fieldset>
				<center>
					<table>
						<tr style="height: 50px;">
							<td>
								<input type="submit" class="botones ico-btnsave" value="GUARDAR DATOS">
                 				<input type="reset"  onclick="document.location.reload();" class="botones ico-btnlimpiar" value="LIMPIAR DATOS">
                 			</td>
						</tr>
					</table>
				</center>
				</form>
				</div><!-- cB -->
		<div class="Cpad">
			<br class="clear" /></div>
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
