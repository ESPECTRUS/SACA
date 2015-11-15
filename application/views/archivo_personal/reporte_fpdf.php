<?php
include("../../libraries/tcpdf/font/times.php"); //fpdf
$this->load->library('fpdf'); //fpdf

$nombre="";
$fpdf = new FPDF();

ob_end_clean();
//inicializa pagina pdf
$fpdf->Open();
$fpdf->AddPage();
$fpdf->AliasNbPages();
$fpdf->SetFontSize(10);
$fpdf->Image('imagenes/archivo.png', 10,2,192,22,'PNG');
//$fpdf->Image('imagenes/piedos.png',10,280,195,22,'PNG');
$fpdf->Cell(100, 15, ' ', 0, 1, 'C');


$fpdf->SetFont('Arial','B',10);
$fpdf->Cell(0, 6, utf8_decode('SISTEMA DE MANEJO DE ARCHIVOS'), 0, 1, 'C');
$fpdf->Cell(0, 6, 'REPORTE DE ARCHIVOS', 0, 10, 'C');
$fpdf->SetFont('Arial','B',10);
$fpdf->Cell(0, 6, '', 0, 1, 'C');


   
    $fpdf->SetFillColor(110,110,255);
    $fpdf->Cell(8,7,"NRO. ARC", 1,0,'C',True);
    $fpdf->SetFont('Arial','B',8);
    $fpdf->Cell(12, 7, "REFERENCIA ", 1,0,'C',true);
    $fpdf->SetFont('Arial', 'B', 8);
    $fpdf->Cell(45, 7, "NRO. CAJA ", 1,0,'C',true);
    $fpdf->SetFont('Arial', 'B', 8);
    $fpdf->Cell(35, 7, "NRO. TOMO", 1,0,'C',true);
    $fpdf->SetFont('Arial', 'B', 8);
    $fpdf->Cell(40, 7, "FOJAS", 1,0,'C',True);
    $fpdf->SetFont('Arial', 'B', 8);
    $fpdf->Cell(30, 7, "CUBIERTA", 1,0,'C',true);
    $fpdf->SetFont('Arial', 'B', 8);
    $fpdf->Ln();
 

    $fpdf->SetFont('Arial', '', 6);
    $counter=1;
          foreach ($archivo as $valor) {
    $fpdf->Cell(8, 4,  $counter++, 0);
    $fpdf->Cell(12, 4,  $valor->ref_arc, 0);
    $fpdf->Cell(45, 4,  $valor->ncj_arc, 0);
    $fpdf->Cell(35, 4,  $valor->ntm_arc, 0);
    $fpdf->Cell(40, 4,  $valor->foj_arc, 0);
    $fpdf->Cell(30, 4,  $valor->cub_arc, 0); 
    $fpdf->Ln();
    $fpdf->PageNo();
    
}
for($i=1;$i<=80;$i++){  $fpdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);}


           $fpdf->SetY(-15);
           $fpdf->SetFont('Arial','I',8);
           $fpdf->Cell(0,10,utf8_decode('Página ').$fpdf->PageNo().' de {nb}',0,0,'C');


//finaliza y muestra en pantalla pdf
$fpdf->Output($nombre.".pdf","I");
?>
