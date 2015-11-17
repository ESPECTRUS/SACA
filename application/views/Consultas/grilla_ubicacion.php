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
		<div id="cB">
			<div class="titulo">LISTADO DE ARCHIVO POR NOMBRE</div>
			<form name="frmpersonal" id="frmpersonal" action="<?=base_url();?>personal/insertar" method="post">
		<table id="example" class="display" cellspacing="5" width="100%" style="border-radius:4px 4px 4px 4px;-moz-border-radius:4px 4px 4px 4px;-webkit-border-radius:4px 4px 4px 4px;border:1px #444444 solid;font-family:Verdana, Geneva, sans-serif;">
	<thead style="font-size:11px;color:#FFF;background-color:#444444;heigth=40px;">
		<tr>
			<th>ID CARPETA.</th>
            <th>TIPO DE CARPETA</th>
			<th>NOMBRE DE LA CARPETA</th>
			<th>NRO. DE CAJA DE ARCHIVO</th>
			<th>NRO. DE TOMO DE ARCHIVO</th>
			<th>NRO. FOJAS DE ARCHIVO</th>
			<th>CUBIERTA DE ARCHIVO</th>
		</tr>
	</thead>
	<tfoot style="font-size:11px;color:#FFF;background-color:#444444;heigth=40px;">
		<tr>
			<th>ID CARPETA.</th>
            <th>TIPO DE CARPETA</th>
			<th>NOMBRE DE LA CARPETA</th>
			<th>NRO. DE CAJA DE ARCHIVO</th>
			<th>NRO. DE TOMO DE ARCHIVO</th>
			<th>NRO. FOJAS DE ARCHIVO</th>
			<th>CUBIERTA DE ARCHIVO</th>
		</tr>
	</tfoot>
	<tbody style="font-size:11px;">
    	<tr>
		<?php
				if ($result)
				{
					foreach ($result->result() as $row) 
					{
						echo "<tr>";
						echo "<td align='center'>".$row->ID_CAR."</td>";
						echo "<td align='center'>".$row->TIP_CAR."</td>";
						echo "<td align='center'>".$row->NOM_CAR."</td>";
						echo "<td align='center'>".$row->NCJ_ARC."</td>";
						echo "<td align='center'>".$row->NTM_ARC."</td>";
						echo "<td align='center'>".$row->FOJ_ARC."</td>";
						echo "<td align='center'>".$row->CUB_ARC."</td>";
						echo "</tr>";
					}
				}
			?>
		</tr>
	</tbody>
</table>
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
