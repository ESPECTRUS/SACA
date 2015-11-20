<?php
require_once(APPPATH."/libraries/fpdf.php");
class PDF extends FPDF
{
    function Header()
    {
        $this->Image(APPPATH.'/libraries/escudo.jpg',15,8, 24,20);
        $this->Image(APPPATH.'/libraries/obras.png',160,8, 44,20);
        $this->SetFont('Arial','B',8);
        $this->Ln(5);
        $this->Cell(80);
        $this->Cell(30,3,'ESTADO PLURINACIONAL DE BOLIVIA',0,1,'C');
        $this->Cell(80);
        $this->Cell(30,3,utf8_decode('MINISTERIO DE OBRAS PÚBLICAS, SERVICIOS Y VIVIENDA'),0,1,'C');
        $this->Ln(2);
        $this->Cell(80);
        $this->Cell(30,3,utf8_decode('UNIDAD EJECUTORA DE TITULACIÓN'),0,1,'C');
        $this->Line(55,22,155,22);
        $this->Ln(8);
        $this->Cell(80);$this->SetFont('Arial','B',12);
        $this->Cell(30,5,utf8_decode('REPORTE DE ARCHIVO POR NOMBRE DE CARPETA'),0,1,'C');
//fecha y hora del reporte
        $this->SetFont('Arial','',7);
        $this->Cell(80);
        $this->Cell(30,3,'FECHA Y HORA : '.' : '.date('d/m/Y - H:i:s'),0,1,'C');
        $this->Ln(4);
//datos generales de archivo y carpeta
        $this->Cell(10);
        $this->SetFont('Arial','B',8);
        $this->Cell(50,4,'USUARIO',0,0,'L');
        $this->Cell(3,4,utf8_decode(':'),0,0,'C');
     // $fpdf->SetFont('Arial','',8);$fpdf->Cell(25,4,utf8_decode(_NAPO),0,1,'L'); NRO_ARC
        $this->Ln(7);
        $this->Cell(10);
        $this->Cell(50,4,utf8_decode('CÓDIGO DE REFERENCIA'),0,0,'L');
        $this->Cell(3,4,utf8_decode(':'),0,0,'C');
    //$fpdf->SetFont('Arial','',8);$fpdf->Cell(25,4,utf8_decode(_NAPO),0,1,'L'); REF_ARC
        $this->Ln(7);
        $this->Cell(10);
        $this->Cell(50,4,'FECHA Y HORA DE REGISTRO',0,0,'L');
        $this->Cell(3,4,utf8_decode(':'),0,0,'C');
    //$fpdf->SetFont('Arial','',8);$fpdf->Cell(25,4,utf8_decode(_NAPO),0,1,'L'); REG_ARC
        $this->Ln(7);
        $this->Cell(10);
        $this->Cell(50,4,'ADJUDICATARIO',0,0,'L');
        $this->Cell(3,4,utf8_decode(':'),0,0,'C');
    //$fpdf->SetFont('Arial','',8);$fpdf->Cell(25,4,utf8_decode(_NAPO),0,1,'L'); NOM_CAR

        $this->Ln(6);
        $this->Cell(80);$this->SetFont('Arial','B',10);
        $this->Cell(30,5,utf8_decode('DETALLE DE CONSULTA '),0,1,'C');
        $this->Ln(1);
//primera fila de la tabla;cabecera de la tabla
        $this->SetFillColor(185,170,200);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(15, 7,utf8_decode("Nª"), 1,0,'C',true);
        $this->Cell(35, 7,"ADJUDICATARIO", 1,0,'C',true);
        $this->Cell(35, 7,"TIPO DE CARPETA", 1,0,'C',True);
        $this->Cell(35,7,utf8_decode("Nª DE HOJA DE RUTA"),1,0,'C',true);
        $this->Cell(21,7,utf8_decode("ESTADO"),1,0,'C',true);
        $this->Cell(47,7,utf8_decode("DESCRIPCION DE CARPETA"),1,1,'C',true);
        
       
    }
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','',7);
        $this->Line(20,264,195,264);
        $this->Cell(0,3,'http://titulacion.oopp.gob.bo',0,1,'C');
        $this->Cell(0,3,'Av. Mariscal Santa Cruz, Edif. Mutual La Primera - Bloque B Piso 19 y 20 Telf.: 2-2146327 Fax: 2-2146327',0,0,'C');
        $this->Cell(0,4,utf8_decode('Página ').$this->PageNo().'/{nb}',1,0,'R');
    }
}
$pdf = new PDF();
ob_end_clean();

//INICIALIZA PAGINA PDF
$pdf->Open();
$pdf->AddPage('P','Letter');
$pdf->AliasNbPages();
$pdf->SetFontSize(10);
$pdf->SetFont('Arial','B',10);
//CONTENIDO
for($i=1;$i<=80;$i++){  $pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);}

//FINALIZA Y MUESTRA EN PANTALLA PDF
//$pdf->Output('REPORTE_UBICACION'.".pdf","I");
$pdf->Output('REPORTE-ARCHIVO'.".pdf","I");


?>
