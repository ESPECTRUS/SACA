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
	                    <a href="" class="vnav-item2">DOCUMENTO C.S.I<span class="vnav-counter2">2</span></a>
	                    <ul class="vnav-subnav2">
	                    	<li><a href="index.html">VER ARCHIVOS</a></li>
	                        <li><a href="index.html">REGISTRAR NUEVO ARCHIVO</a></li>
	                        <li><a href="index.html">MODIFICAR ARCHIVO</a></li>
	                    </ul>
	                </li>
	                <li class="active2">
	                    <a href="" class="vnav-item2">CONSULTAS Y REPORTES<span class="vnav-counter2">5</span></a>
	                    <ul class="vnav-subnav2">
	                        <li><a href="index.html">POR NOMBRE DE CARPETA</a></li>
	                        <li><a href="index.html">POR NOMBRE PROYECTO (URBANIZACION)</a></li>
	                        <li><a href="index.html">POR NOMBRE DE PRODUCTOR</a></li>
	                        <li><a href="index.html">POR UBICACION</a></li>
	                        <li><a href="index.html">POR DEPARTAMENTO</a></li>
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
			<div class="titulo">REGISTRAR DATOS DE CARPETA SOCIAL INDIVIDUAL - CSI</div>
			<form name="frmpersonal" id="frmpersonal" action="<?=base_url();?>personal/insertar" method="post">
				<fieldset class="fieldcuerpo" align="left" >
					<legend> DATOS GENERALES </legend>
					<table >
						<tr style="height: 30px;">
							<td width="100px" class="lblnombre">Nro. de caja</td>
							<td width="240px"><input type="number" name="ci" class="txtcampo" placeholder="NRO DE CAJA" ></td>
							<td width="100px" class="lblnombre">Nro. de tomo</td>
							<td width="240px"><input type="text" name="ci" class="txtcampo" placeholder="NRO DE TOMO" ></td>
						</tr>
						<tr style="height: 30px;">
							<td width="100px" class="lblnombre">Nro. de fojas</td>
							<td width="240px"><input type="text" name="ci" class="txtcampo" placeholder="NRO DE FOJAS" ></td>
							<td width="100px" class="lblnombre">Cubierta</td>
							<td width="240px">
								<select name="cubierta" class="txtselect">
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
					<legend> DATOS TECNICOS </legend>
					<table >
						<tr style="height:3px;">
							<td width="180px" class="lblnombre">Nombre del proyecto (urb)</td>
							<td width="480px"><input type="text" name="ci" class="txtcampo large" placeholder="URBANIZACION" ></td>
						</tr>
					</table>
					<table>
						<tr style="height: 30px;">
							<td width="40px" class="lblnombre">Lugar</td>
							<td width="100px">
								<select name="Lugar" class="txtselect short">
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
							<td width="120px"><input type="text" name="ci" class="txtcampo short" placeholder="SECTOR" ></td>
							<td width="40px" class="lblnombre">Plan</td>
							<td width="120px"><input type="text" name="ci" class="txtcampo short" placeholder="PLAN" ></td>
							<td width="40px" class="lblnombre">Manzano</td>
							<td width="120px"><input type="text" name="ci" class="txtcampo short" placeholder="MANZANO" ></td>		
							<td width="40px" class="lblnombre">Lote</td>
							<td width="120px"><input type="text" name="ci" class="txtcampo short" placeholder="LOTE" ></td>
						</tr>
					</table>
				</fieldset>
				<fieldset class="fieldcuerpo" align="left">
					<legend>DATOS DE CARPETA</legend>
					<table>
						<tr style="height: 30px;">
							<td width="130px" class="lblnombre">Nombre de carpeta</td>
							<td width="220px"><input type="text" name="ci" class="txtcampo" placeholder="ADJUDICATARIO/BENEFICIARIO" ></td>
							<td width="80px" class="lblnombre">Cantidad de Doc.</td>
							<td width="70px"><input type="text" name="ci" class="txtcampo" placeholder="CANTIDAD DE DOCUMENTOS" ></td>
						</tr>
						<tr style="height: 30px;">
							<td width="130px" class="lblnombre">Fecha Inicial Extrema</td>
							<td width="220px"><input type="text" name="ci" class="txtcampo" id="datepicker" placeholder="FECHA INICIAL" ></td>
							<td width="100px" class="lblnombre">Fecha Final Extrema</td>
							<td width="70px"><input type="text" name="ci" class="txtcampo" placeholder="FECHA FINAL" ></td>
						</tr>
					</table>
					<!--TIPOS DE DOCUMENTOS-->
					<fieldset class="fieldcuerpo">
						<legend>Documento 1</legend>
						<table>
							<tr>
								<td rowspan="2" width="100px"></td>
								<td width="100px" class="lblnombre">Tipo de Doc.</td>
								<td width="200px">
									<select name="Lugar" class="txtselect">
										<option value="">SELECCIONE</option>
										<option value="LP">Resolucion</option>
										<option value="OR">Memorandum</option>
										<option value="CBBA">Informe Tecnico</option>
										<option value="PT">Minuta</option>				
										<option value="TJ">Testimonio</option>
										<option value="BN">Certificado de no propiedad</option>
										<option value="CH">Documento de identificacion</option>
									</select>
								<td width="80px" class="lblnombre">Fecha Doc.</td>
								<td width="70px"><input type="text" name="ci" class="txtcampo" id="datepicker" placeholder="FECHA" ></td>
							</tr>
							<tr style="height: 30px;">
								<td width="100px" class="lblnombre">Cargar Archivo</td>
								<td><input type="file" value="CARGAR ARCHIVO" class="txtcampo" style="border: 0px;"></td>
								<td width="80px" class="lblnombre">Descripción</td>
								<td width="70px"><input type="text" name="ci" class="txtcampo " placeholder="DESCRIPCION" ></td>
							</tr>
						</table>
					</fieldset>
				</fieldset>
				<fieldset class="fieldcuerpo" align="left">
					<legend>AREA</legend>
					<table>
						<tr style="height: 30px;">
							<td width="180px" class="lblnombre">Nombre del Productor</td>
							<td width="220px"><input type="text" name="ci" class="txtcampo large" placeholder="NOMBRE DEL PRODUCTOR" ></td>
						</tr>
						<tr>
							<td width="180px" class="lblnombre">Observacion</td>
							<td width="70px"><input type="text" name="ci" class="txtcampo large" placeholder="OBSERVACION" ></td>
						</tr>
					</table>
				</fieldset>
				<center>
					<table>
						<tr style="height: 50px;">
							<td>
								<input type="submit" class="botones ico-btnsave" value="GUARDAR DATOS">
                 				<input type="reset" class="botones ico-btnlimpiar" value="LIMPIAR DATOS">
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
