<?php
include("../../libraries/tcpdf/font/times.php"); //fpdf
$this->load->library('fpdf'); //fpdf
$nombre="";
$fpdf = new FPDF('P','mm','A4');
ob_end_clean();
//inicializa pagina pdf
$fpdf->Open();
$fpdf->AddPage();
$fpdf->AliasNbPages();
$fpdf->SetFontSize(10);
$fpdf->Image(APPPATH.'/libraries/escudo.jpg',15,8, 24,20);
$fpdf->Image(APPPATH.'/libraries/obras.png',160,8, 44,20);
$fpdf->SetFont('Arial','B',8);
$fpdf->Ln(5);
$fpdf->Cell(80);
$fpdf->Cell(30,3,'ESTADO PLURINACIONAL DE BOLIVIA',0,1,'C');
$fpdf->Cell(80);
$fpdf->Cell(30,3,utf8_decode('MINISTERIO DE OBRAS PÚBLICAS, SERVICIOS Y VIVIENDA'),0,1,'C');
$fpdf->Ln(2);
$fpdf->Cell(80);
$fpdf->Cell(30,3,utf8_decode('UNIDAD EJECUTORA DE TITULACIÓN'),0,1,'C');
$fpdf->Line(55,22,155,22);
$fpdf->Ln(8);
$fpdf->Cell(80);$fpdf->SetFont('Arial','B',12);
$fpdf->Cell(30,5,utf8_decode('REPORTE DE ARCHIVO POR NOMBRE DE CARPETA'),0,1,'C');
//fecha y hora del reporte
        $fpdf->SetFont('Arial','',7);
        $fpdf->Cell(80);
        $fpdf->Cell(30,3,'FECHA Y HORA : '.' : '.date('d/m/Y - H:i:s'),0,1,'C');
        $fpdf->Ln(4);
//datos generales de archivo y carpeta
        $fpdf->Cell(10);
        $fpdf->SetFont('Arial','B',8);
        $fpdf->Cell(50,4,'USUARIO',0,0,'L');
        $fpdf->Cell(3,4,utf8_decode(':'),0,0,'C');
     // $fpdf->SetFont('Arial','',8);$fpdf->Cell(25,4,utf8_decode(_NAPO),0,1,'L'); NRO_ARC
        $fpdf->Ln(7);
        $fpdf->Cell(10);
        $fpdf->SetFont('Arial','B',8);
        $fpdf->Cell(50,4,utf8_decode('NÚMERO DE ARCHIVO'),0,0,'L');
        $fpdf->Cell(3,4,utf8_decode(':'),0,0,'C');
     // $fpdf->SetFont('Arial','',8);$fpdf->Cell(25,4,utf8_decode(_NAPO),0,1,'L'); NRO_ARC
        $fpdf->Ln(7);
        $fpdf->Cell(10);
        $fpdf->Cell(50,4,utf8_decode('CÓDIGO DE REFERENCIA'),0,0,'L');
        $fpdf->Cell(3,4,utf8_decode(':'),0,0,'C');
    //$fpdf->SetFont('Arial','',8);$fpdf->Cell(25,4,utf8_decode(_NAPO),0,1,'L'); REF_ARC
        $fpdf->Ln(7);
        $fpdf->Cell(10);
        $fpdf->Cell(50,4,'FECHA Y HORA DE REGISTRO',0,0,'L');
        $fpdf->Cell(3,4,utf8_decode(':'),0,0,'C');
    //$fpdf->SetFont('Arial','',8);$fpdf->Cell(25,4,utf8_decode(_NAPO),0,1,'L'); REG_ARC
        $fpdf->Ln(7);
        $fpdf->Cell(10);
        $fpdf->Cell(50,4,'ADJUDICATARIO',0,0,'L');
        $fpdf->Cell(3,4,utf8_decode(':'),0,0,'C');
    //$fpdf->SetFont('Arial','',8);$fpdf->Cell(25,4,utf8_decode(_NAPO),0,1,'L'); NOM_CAR

        $fpdf->Ln(6);
        $fpdf->Cell(80);$fpdf->SetFont('Arial','B',10);
        $fpdf->Cell(30,5,utf8_decode('DETALLE DE CONSULTA '),0,1,'C');
        $fpdf->Ln(1);
//primera fila de la tabla;cabecera de la tabla
        $fpdf->SetFillColor(185,170,200);
        $fpdf->SetFont('Arial', 'B', 8);
        $fpdf->Cell(15, 7,utf8_decode("Nª"), 1,0,'C',true);
        $fpdf->Cell(35, 7,"ADJUDICATARIO", 1,0,'C',true);
        $fpdf->Cell(35, 7,"TIPO DE CARPETA", 1,0,'C',True);
        $fpdf->Cell(35,7,utf8_decode("Nª DE HOJA DE RUTA"),1,0,'C',true);
        $fpdf->Cell(21,7,utf8_decode("ESTADO"),1,0,'C',true);
        $fpdf->Cell(47,7,utf8_decode("DESCRIPCION DE CARPETA"),1,0,'C',true);
        $fpdf->Ln();

     //generando reporte desde la base de datos
     $fpdf->SetFont('Arial', '', 6);
    //error_reporting(0);

     if ($result)
        {
        foreach ($result as $row) :
            $fpdf->Cell(15, 7,  $row->ID_CAR, 1,0,'C');
            $fpdf->Cell(35, 7,  $row->TIP_CAR, 1,0,'');
            $fpdf->Cell(35, 7,  $row->NOM_CAR, 1,0,'');
            $fpdf->Cell(35, 7,  $row->NCJ_ARC, 1,0,'C');
            $fpdf->Cell(21, 7,  $row->NTM_ARC, 1,0,'C');
            $fpdf->Cell(47, 7,  $row->FOJ_ARC, 1,0,'C');

            $fpdf->Ln();

            # code...
        
        endforeach;
         # code...
     }


//finaliza y muestra en pantalla pdf
$fpdf->Output($nombre.".pdf","I");
?>
