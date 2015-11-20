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
					$('#frmarchivo').validate
					(
					 	{
							rules:
							{/*
							'ncj_arc': {required: true},
							'cub_arc': 'required',
							'npr_dte': {required: true},
							'lug_dte': 'required',
							'man_dte': {required: true},
							'lot_dte': {required: true},
							'nom_car': {required: true},
							'ci_car': {required: true},
							'fec_ini': {required: true},
							'fec_fin': {required: true},
							'tip_doc': {required: true},
							'fec_doc': {required: true},
							'amb_ubi': {required: true},
							'est_ubi': {required: true},
							'crp_ubi': 'required',
							'bal_ubi': {required: true},
							'pro_area': {required: true},
							'obs_area': {required: true}*/

							},
							messages: 
							{
							'ncj_arc':{required:'<label class="mensajevalidacion">Campo requerido</label>'},

							'cub_arc':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'npr_dte':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'lug_dte':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'man_dte':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'lot_dte':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'nom_car':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'ci_car':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'fec_ini':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'fec_fin':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'tip_doc':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'fec_doc':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'amb_ubi':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'est_ubi':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'crp_ubi':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'bal_ubi':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'pro_area':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'obs_area':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							},
							debug: true,
							submitHandler: function(form)
							{
								document.getElementById("frmarchivo").submit();
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
			
			dateFormat:'yy-mm-dd',
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
	                        <li><a href="<?= base_url().'registro'?>">MODIFICAR ARCHIVO</a></li>
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
			<div class="titulo">REGISTRAR DATOS DE CARPETA SOCIAL INDIVIDUAL - CSI</div>
			<form name="frmarchivo" id="frmarchivo" action="<?=base_url();?>registro/insertar" method="post">
				
				
				<fieldset class="fieldcuerpo" align="left">
					<legend>DATOS DE CARPETA</legend>
					<table>
						<tr style="height: 30px;">
							<td width="130px" class="lblnombre">Nombre de carpeta</td>
							<td width="220px"><input type="text" name="nom_car" class="txtcampo large" placeholder="ADJUDICATARIO/BENEFICIARIO" onkeypress="return sololetras(event);" onpaste="return false" ></td>
						</tr>
					</table>
					<table>
						<tr style="height: 30px;">
							<td width="130px" class="lblnombre">Fecha Inicial Extrema</td>
							<td width="220px"><input type="text" name="fec_ini" class="txtcampo datepicker" readonly="" placeholder="FECHA INICIAL" ></td>
							<td width="100px" class="lblnombre">Fecha Final Extrema</td>
							<td width="70px"><input type="text" name="fec_fin" class="txtcampo datepicker" readonly="" placeholder="FECHA FINAL" ></td>
						</tr>
						<tr style="height: 30px;">
							<td width="80px" class="lblnombre">CI</td>
							<td width="70px"><input type="text" name="ci_car" class="txtcampo " placeholder="C.I." onkeypress="return solonumeros(event);" onpaste="return false"></td>
							<td width="80px" class="lblnombre">Hoja de ruta</td>
							<td width="70px"><input type="text" name="hru_car" class="txtcampo " placeholder="NUMERO DE HOJA DE RUTA" onkeypress="return solonumeros(event);" onpaste="return false"></td>
								
						</tr>
					</table>
					<!--TIPOS DE DOCUMENTOS-->
					<fieldset class="fieldcuerpo">
						<legend>Documento</legend>
						<table>
							<tr style="height: 30px;">
								<td width="80px" class="lblnombre">Descripción</td>
								<td width="70px"><textarea name="des_car" class="txtcampo large2" placeholder="DESCRIPCION" onkeypress="return alfanumerico(event);" onpaste="return false" ></textarea></td>
							</tr>
						</table>
					</fieldset>								
				</fieldset>

				<fieldset class="fieldcuerpo" align="left" >
					<legend> DATOS TECNICOS </legend>
					<table >
						<tr style="height:3px;">
							<td width="180px" class="lblnombre">Nombre del proyecto (urb)</td>
							<td width="480px"><input type="text" name="npr_dte" class="txtcampo large" placeholder="URBANIZACION" onkeypress="return alfanumerico(event);" onpaste="return false"></td>
						</tr>
					</table>
					<table>
						<tr style="height: 30px;">
							<td width="40px" class="lblnombre">Lugar</td>
							<td width="100px">
								<select name="lug_dte" class="txtselect short">
									<option value="">SELECCIONE</option>
									<option value="LP">La Paz</option>
									<option value="OR">Oruro</option>
									<option value="CBBA">Cochabamba</option>
									<option value="PT">Potosi</option>				
									<option value="TJ">Tarija</option>
									<option value="BN">Beni</option>
									<option value="CH">Chuquisaca</option>
									<option value="SCZ">Santa Cruz</option>
									<option value="PA">Pando</option>
								</select>
							</td>
							<td width="40px" class="lblnombre">Sector</td>
							<td width="120px"><input type="text" name="sec_dte" class="txtcampo short" placeholder="SECTOR" onkeypress="return alfanumerico(event);" onpaste="return false"></td>
							<td width="40px" class="lblnombre">Plan</td>
							<td width="120px"><input type="text" name="pln_dte" class="txtcampo short" placeholder="PLAN" onkeypress="return alfanumerico(event);" onpaste="return false" ></td>
							<td width="40px" class="lblnombre">Manzano</td>
							<td width="120px"><input type="text" name="man_dte" class="txtcampo short" placeholder="MANZANO" onkeypress="return alfanumerico(event);" onpaste="return false" ></td>		
							<td width="40px" class="lblnombre">Lote</td>
							<td width="120px"><input type="text" name="lot_dte" class="txtcampo short" placeholder="LOTE" onkeypress="return alfanumerico(event);" onpaste="return false" ></td>
						</tr>
					</table>
				</fieldset>

				<fieldset class="fieldcuerpo" align="left">
					<legend> DATOS GENERALES </legend>
					<table >
						<tr style="height: 30px;">
							<td width="100px" class="lblnombre">Nro. de caja</td>
							<td width="240px" ><input type="text" name="ncj_arc" class="txtcampo" placeholder="NRO DE CAJA" onkeypress="return solonumeros(event);" onpaste="return false"></td>
							<td width="100px" class="lblnombre">Nro. de tomo</td>
							<td width="240px" ><input type="text" name="ntm_arc" class="txtcampo" placeholder="NRO DE TOMO" onkeypress="return solonumeros(event);" onpaste="return false"></td>
						</tr>
						<tr style="height: 30px;">
							<td width="100px" class="lblnombre">Nro. de fojas</td>
							<td width="240px"><input type="text" name="foj_arc" class="txtcampo" placeholder="NRO DE FOJAS" onkeypress="return solonumeros(event);" onpaste="return false"></td>
							<td width="100px" class="lblnombre">Cubierta</td>
							<td width="240px">
								<select name="cub_arc" class="txtselect">
									<option value="">SELECCIONE</option>
									<option value="Carpetilla">Carpetilla</option>
									<option value="Carpeta de palanca">Carpeta de palanca</option>
									<option value="Otros">Otros</option>
								</select>
							</td>
						</tr>
					</table>
				</fieldset>	


				<fieldset class="fieldcuerpo" align="left" >
					<legend> UBICACION FISICA </legend>
					<table >
						<tr style="height: 30px;">
							<td width="100px" class="lblnombre">Ambiente</td>
							<td width="240px"><input type="text" name="amb_ubi" class="txtcampo" placeholder="AMBIENTE" onkeypress="return alfanumerico(event);" onpaste="return false" ></td>
							<td width="100px" class="lblnombre">Estante</td>
							<td width="240px"><input type="text" name="est_ubi" class="txtcampo" placeholder="ESTANTE" onkeypress="return alfanumerico(event);" onpaste="return false"></td>
						</tr>
						<tr style="height: 30px;">
							<td width="100px" class="lblnombre">Cuerpo</td>
							<td width="240px"><input type="text" name="cue_ubi" class="txtcampo" placeholder="CUERPO" onkeypress="return alfanumerico(event);" onpaste="return false"></td>
							<td width="100px" class="lblnombre">Balda</td>
							<td width="240px"><input type="text" name="bal_ubi" class="txtcampo" placeholder="BALDA" onkeypress="return alfanumerico(event);" onpaste="return false"></td>
						</tr>
					</table>
				</fieldset>
				<fieldset class="fieldcuerpo" align="left">
					<legend>AREA</legend>
					<table>
						<tr style="height: 30px;">
							<td width="180px" class="lblnombre">Nombre del Productor</td>
							<td width="220px"><input type="text" name="pro_area" class="txtcampo large" placeholder="NOMBRE DEL PRODUCTOR" onkeypress="return sololetras(event);" onpaste="return false"></td>
						</tr>
						<tr>
							<td width="180px" class="lblnombre">Observacion</td>
							<td width="70px"><input type="text" name="obs_area" class="txtcampo large" placeholder="OBSERVACION" onkeypress="return alfanumerico(event);" onpaste="return false"></td>
						</tr>
					</table>
				</fieldset>
				<center>
					<table>
						<tr style="height: 50px;">
							<td>
								<input type="submit" name="submit_reg_arc" class="botones ico-btnsave" value="GUARDAR DATOS">
                 				<input type="reset"  onclick="document.location.reload();" class="botones ico-btnlimpiar" value="LIMPIAR DATOS">
                 			</td>
						</tr>
					</table>
				</td>
				</tr>
				</table>
				</center>	
				</fieldset>
			</form>
		<?php echo validation_errors(); ?>
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