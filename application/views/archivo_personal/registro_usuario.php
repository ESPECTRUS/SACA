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
		<!--validaciones-->
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
					$('#frmregusuario').validate
					(  
					 	{
							rules:
							{
							'ci_usu': {
								required: true,
								},
							'nom_usu': {required: true},
							'apa_usu': {required: true},
							'ama_usu': {required: true}
							
							},
							messages: 
							{
							'ci_usu':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'nom_usu':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'apa_usu':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'ama_usu':{required:'<label class="mensajevalidacion">Campo requerido</label>'}
							
							},
							debug: true,
							submitHandler: function(form)
							{
								document.getElementById("frmregusuario").submit();
							}
					 	}
					);
				}
			);
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
		
		<script type="text/javascript">
              $(document).ready(function() { setTimeout(function(){ $(".mensajelogin").fadeIn(1500); },0000); });
              $(document).ready(function() { setTimeout(function(){ $(".mensajelogin").fadeOut(1500); },5000); });
            </script>
			
			<div class="titulo">REGISTRO DE USUARIO </div>
			<?php if(isset($mensaje)):?>
						<div class="mensajelogin" id="mensajebien"><label><?php echo $mensaje;?></label></div>
		<?php endif;?>
		<?php if(validation_errors()) {?>    
				<div class="mensajelogin" id="mensaje"><label><?= validation_errors();?></label></div>
		        <?php } ?>
		
			<form name="frmregusuario" id="frmregusuario" action="<?= base_url().'registro/registro_very'?>" method="post">
				<!--TIPOS DE DOCUMENTOS-->
				<fieldset class="fieldcuerpo" align="left" >
					<legend>DATOS DE USUARIO</legend>
					<table>
						<tr style="height:30px;">
							<td width="90px" class="lblnombre">C.I.</td>
							<td width="480px"><input type="text" name="ci_usu" class="txtcampo " value="<?php echo set_value('ci_usu')?>" placeholder="CARNET DE IDENTIDAD" onkeypress="return alfanumerico(event);" onpaste="return false"></td>
						</tr>
						<tr style="height:30px;">
							<td width="90px" class="lblnombre">NOMBRE(S)</td>
							<td width="480px"><input type="text" name="nom_usu" value="<?php echo set_value('nom_usu')?>" class="txtcampo large" placeholder="NOMBRE" onkeypress="return sololetras(event);" onpaste="return false"></td>
						</tr>
					</table>
					<table >
						<tr style="height: 30px;">
							<td width="100px" class="lblnombre">AP. PATERNO</td>
							<td width="240px" ><input type="text" name="apa_usu" value="<?php echo set_value('apa_usu')?>" class="txtcampo" placeholder="APELLIDO PATERNO" onkeypress="return sololetras(event);" onpaste="return false"></td>
							<td width="100px" class="lblnombre">AP. MATERNO</td>
							<td width="240px" ><input type="text" name="ama_usu" value="<?php echo set_value('ama_usu')?>" class="txtcampo" placeholder="APELLIDO MATERNO" onkeypress="return sololetras(event);" onpaste="return false"></td>
						</tr>
					</table>
				</fieldset>
				<fieldset class="fieldcuerpo" align="left" >
					<legend>DATOS DE CUENTA</legend>
					<table>
						<tr style="height:30px;">
							
							<td width="150px" class="lblnombre">USUARIO</td>
							<td width="480px"><input type="text" name="nic_usu" value="<?php echo set_value('nic_usu')?>" class="txtcampo large" placeholder="NOMBRE DE USUARIO" onpaste="return false"></td>
						</tr>
						<tr style="height:30px;">
							
							<td width="150px" class="lblnombre">PASSWORD</td>
							<td width="480px"><input type="password" name="pas_usu" value="<?php echo set_value('pas_usu')?>" class="txtcampo large" placeholder="CONTRASEÑA" onpaste="return false"></td>
						</tr>
						<tr style="height:30px;">
							<td width="150px" class="lblnombre">REPITA EL PASSWORD</td>
							<td width="480px"><input type="password" name="conf_pas" class="txtcampo large" placeholder="REPITA CONTRASEÑA"  onpaste="return false"></td>
						</tr>
					</table>	
				</fieldset>
					<center>
					<table>
						<tr style="height: 50px;">
							<td>
								<input type="submit" class="botones ico-btnsave" name="submit_reg" value="GUARDAR DATOS">
                 				<input type="reset"  onclick="document.location.reload();" class="botones ico-btnlimpiar" value="LIMPIAR DATOS">
                 			</td>
						</tr>
					</table>
				</td>
				</tr>
				</table>
				</center>	
				
		
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