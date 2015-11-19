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
$fpdf->Image('templates/img/images/reporte2.png', 10,2,190,20,'PNG');
$fpdf->Image('templates/img/images/pie.png',5,280,200,22,'PNG');
$fpdf->Cell(100, 15, ' ', 0, 1, 'C');

$fpdf->SetFont('Arial','B',10);
$fpdf->Cell(0, 6, '', 0, 1, 'C');
//primera fila de la tabla
    $fpdf->SetFillColor(185,170,200);
    $fpdf->SetFont('Arial', 'B', 8);
     $fpdf->Cell(15, 7,utf8_decode("Nª"), 1,0,'C',true);
     $fpdf->Cell(40, 7,"TIPO DE CARPETA", 1,0,'C',true);
     $fpdf->Cell(40, 7,"NOMBRE DE CARPETA", 1,0,'C',True);
     $fpdf->Cell(21,7,utf8_decode("Nª DE CAJA"),1,0,'C',true);
     $fpdf->Cell(21,7,utf8_decode("Nª DE TOMO"),1,0,'C',true);
     $fpdf->Cell(21,7,utf8_decode("Nª DE FOJAS"),1,0,'C',true);
     $fpdf->Cell(30,7,"CUBIERTA",1,0,'C',true);
     $fpdf->Ln();
     //generando reporte desde la base de datos
     $fpdf->SetFont('Arial', '', 6);
    //error_reporting(0);

     if ($result)
        {
        foreach ($result as $row) :
            $fpdf->Cell(15, 7,  $row->ID_CAR, 1,0,'C');
            $fpdf->Cell(40, 7,  $row->TIP_CAR, 1,0,'');
            $fpdf->Cell(40, 7,  $row->NOM_CAR, 1,0,'');
            $fpdf->Cell(21, 7,  $row->NCJ_ARC, 1,0,'C');
            $fpdf->Cell(21, 7,  $row->NTM_ARC, 1,0,'C');
            $fpdf->Cell(21, 7,  $row->FOJ_ARC, 1,0,'C');
            $fpdf->Cell(30, 7,  $row->CUB_ARC, 1,0,'');
            $fpdf->Ln();

            # code...
        
        endforeach;
         # code...
     }


/*
                    if ($result)
                {

                    foreach ($result->result() as $row) 
                    {
                        echo "<tr>";
                        echo "<td align='center'>".$row->ID_CAR."</td>";
                        echo "<td align='center'>".$row->TIP_CAR."</td>";
                        echo "<td align='left' width='500px'>".$row->NOM_CAR."</td>";
                        echo "<td align='center'>".$row->NCJ_ARC."</td>";
                        echo "<td align='center'>".$row->NTM_ARC."</td>";
                        echo "<td align='center'>".$row->FOJ_ARC."</td>";
                        echo "<td align='center'>".$row->CUB_ARC."</td>";
                        echo "<td align='center'>".$row->CUB_ARC."</td>";
                        echo "<td align='center'>".$row->CUB_ARC."</td>";
                        echo "</tr>";
                    } 
                }*/
       //  $fpdf->Cell(12, 4,  $valor->ref_arc, 0);




/*

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
*/
    

           $fpdf->SetY(-15);
           $fpdf->SetFont('Arial','I',8);
           $fpdf->Cell(0,10,utf8_decode('Página ').$fpdf->PageNo().' de {nb}',0,0,'C');


//finaliza y muestra en pantalla pdf
$fpdf->Output($nombre.".pdf","I");
?>
