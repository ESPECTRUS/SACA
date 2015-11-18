<?php
include("../../libraries/tcpdf/font/times.php"); //fpdf
$this->load->library('fpdf'); //fpdf
$nombre="";
$fpdf = new FPDF('L','mm','A4');
ob_end_clean();
//inicializa pagina pdf
$fpdf->Open();
$fpdf->AddPage();
$fpdf->AliasNbPages();
$fpdf->SetFontSize(10);
$fpdf->Image('templates/img/images/reporte2.png', 10,2,275,22,'PNG');
$fpdf->Image('templates/img/images/pie.png',5,190,285,22,'PNG');
$fpdf->Cell(100, 15, ' ', 0, 1, 'C');

$fpdf->SetFont('Arial','B',10);
$fpdf->Cell(0, 6, '', 0, 1, 'C');
//primera fila de la tabla
    $fpdf->SetFillColor(185,170,200);
    $fpdf->SetFont('Arial', 'B', 8);
     $fpdf->Cell(215, 7, "AREA DE IDENTIFICACION ", 1,0,'C',true);
     $fpdf->Cell(30, 7, "AREA DE CONTEXTO", 1,0,'C',true);
     $fpdf->Cell(30, 7, "AREA DE NOTAS", 1,0,'C',True);
     $fpdf->Ln();
//generando tablas
     $fpdf->Cell(8,12,"Nª",1,0,'C',true);
        $fpdf->Cell(20,12,"CODIGO DE REFERENCIA",1,0,'C',true);
           $fpdf->Cell(8,12,"Nª CAJA",1,0,'C',true);
              $fpdf->Cell(25,12,"SERIE DOCUMENTAL",1,0,'C',true);
                 $fpdf->Cell(25,12,"SUBSERIE",1,0,'C',true);
                    $fpdf->Cell(20,12,"PROYECTO",1,0,'C',true);
                       $fpdf->Cell(10,12,"LUGAR",1,0,'C',true);
                          $fpdf->Cell(5,12,"",1,0,'C',true);
                             $fpdf->Cell(5,12,"hola",1,0,'C',true);
                                $fpdf->Cell(5,12,"",1,0,'C',true);
                                   $fpdf->Cell(5,12,"",1,0,'C',true);
                                      $fpdf->Cell(35,12,"FECHAS EXTREMAS",1,0,'C',true);//contenedor de otros campos
                                         $fpdf->Cell(5,12,"Nª TOMO",1,0,'C',true);
                                            $fpdf->Cell(5,12,"FOJAS",1,0,'C',true);
                                               $fpdf->Cell(25,12,"UBICACION TOPOGRAFICA",1,0,'C',true);//contenedor de otros campos
                                                  $fpdf->Cell(9,12,"CUBIERTA",1,0,'C',true);
                                                     $fpdf->Cell(30,12,"NOMBRE DEL PRODUCTOR",1,0,'C',true);
                                                        $fpdf->Cell(30,12,"OBSERVACIONES",1,0,'C',true);
                                                        $fpdf->Ln();
     /*$fpdf->SetFont('Arial', 'B', 8);
     $fpdf->Cell(55, 7, "DATOS DE CARPETA ", 1,0,'C',true);
     $fpdf->Cell(50, 7, "DATOS TECNICOS", 1,0,'C',true);
     $fpdf->Cell(30, 7, "FECHAS EXTREMAS", 1,0,'C',True);
     $fpdf->Cell(30, 7, "UBICACION FISICA", 1,0,'C',true);
     $fpdf->Cell(30, 7, "AREA", 1,0,'C',true);
     $fpdf->Ln();
        //DATOS DE CARPETA
        $fpdf->SetFont('Arial','B',4); 
        $fpdf->Cell(5,7,"NRO.", 1,0,'C',True);
        $fpdf->Cell(9,7,"TIPO", 1,0,'C',True);
        $fpdf->Cell(10,7,"NRO. CAJA", 1,0,'C',True);
        $fpdf->Cell(10,7,"NRO. TOMO", 1,0,'C',True);
        $fpdf->Cell(10,7,"NRO. FOJAS", 1,0,'C',True);
        $fpdf->Cell(11,7,"CUBIERTA", 1,0,'C',True);
        //DATOS TECNICOS
        $fpdf->Cell(14,7,"NOMBRE CARPETA", 1,0,'C',True);
        $fpdf->Cell(10,7,"PROYECTO", 1,0,'C',True);
        $fpdf->Cell(7,7,"SECTOR", 1,0,'C',True);
        $fpdf->Cell(6,7,"PLAN", 1,0,'C',True);
        $fpdf->Cell(8,7,"MANZANO", 1,0,'C',True);
        $fpdf->Cell(5,7,"LOTE", 1,0,'C',True);
        //FECHAS EXTREMAS
        $fpdf->Cell(15,7,"FECHA INICIAL", 1,0,'C',True);        
        $fpdf->Cell(15,7,"FECHA FINAL", 1,0,'C',True);
        //UBICACION FISICA
        $fpdf->Cell(8,7,"AMBIENTE", 1,0,'C',True);
        $fpdf->Cell(8,7,"ESTANTE", 1,0,'C',True);
        $fpdf->Cell(7,7,"CUERPO", 1,0,'C',True);
        $fpdf->Cell(7,7,"BALDA", 1,0,'C',True);
        //AREA
        $fpdf->Cell(15,7,"PRODUCTOR", 1,0,'C',True);
        $fpdf->Cell(15,7,"OBSERVACION", 1,0,'C',True);
        $fpdf->Ln();*/

    /*$fpdf->SetFont('Arial', '', 6);
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
    }*/

    

           $fpdf->SetY(-15);
           $fpdf->SetFont('Arial','I',8);
           $fpdf->Cell(0,10,utf8_decode('Página ').$fpdf->PageNo().' de {nb}',0,0,'C');


//finaliza y muestra en pantalla pdf
$fpdf->Output($nombre.".pdf","I");
?>
