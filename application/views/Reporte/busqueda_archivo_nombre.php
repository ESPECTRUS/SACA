<?php
require_once(APPPATH."/libraries/fpdf.php");
class PDF extends FPDF
{
    function RoundedRect($x, $y, $w, $h, $r, $corners = '1234', $style = '')
    {
        $k = $this->k;
        $hp = $this->h;
        if($style=='F')
            $op='f';
        elseif($style=='FD' || $style=='DF')
            $op='B';
        else
            $op='S';
        $MyArc = 4/3 * (sqrt(2) - 1);
        $this->_out(sprintf('%.2F %.2F m',($x+$r)*$k,($hp-$y)*$k ));

        $xc = $x+$w-$r;
        $yc = $y+$r;
        $this->_out(sprintf('%.2F %.2F l', $xc*$k,($hp-$y)*$k ));
        if (strpos($corners, '2')===false)
            $this->_out(sprintf('%.2F %.2F l', ($x+$w)*$k,($hp-$y)*$k ));
        else
            $this->_Arc($xc + $r*$MyArc, $yc - $r, $xc + $r, $yc - $r*$MyArc, $xc + $r, $yc);

        $xc = $x+$w-$r;
        $yc = $y+$h-$r;
        $this->_out(sprintf('%.2F %.2F l',($x+$w)*$k,($hp-$yc)*$k));
        if (strpos($corners, '3')===false)
            $this->_out(sprintf('%.2F %.2F l',($x+$w)*$k,($hp-($y+$h))*$k));
        else
            $this->_Arc($xc + $r, $yc + $r*$MyArc, $xc + $r*$MyArc, $yc + $r, $xc, $yc + $r);

        $xc = $x+$r;
        $yc = $y+$h-$r;
        $this->_out(sprintf('%.2F %.2F l',$xc*$k,($hp-($y+$h))*$k));
        if (strpos($corners, '4')===false)
            $this->_out(sprintf('%.2F %.2F l',($x)*$k,($hp-($y+$h))*$k));
        else
            $this->_Arc($xc - $r*$MyArc, $yc + $r, $xc - $r, $yc + $r*$MyArc, $xc - $r, $yc);

        $xc = $x+$r ;
        $yc = $y+$r;
        $this->_out(sprintf('%.2F %.2F l',($x)*$k,($hp-$yc)*$k ));
        if (strpos($corners, '1')===false)
        {
            $this->_out(sprintf('%.2F %.2F l',($x)*$k,($hp-$y)*$k ));
            $this->_out(sprintf('%.2F %.2F l',($x+$r)*$k,($hp-$y)*$k ));
        }
        else
            $this->_Arc($xc - $r, $yc - $r*$MyArc, $xc - $r*$MyArc, $yc - $r, $xc, $yc - $r);
        $this->_out($op);
    }

    function _Arc($x1, $y1, $x2, $y2, $x3, $y3)
    {
        $h = $this->h;
        $this->_out(sprintf('%.2F %.2F %.2F %.2F %.2F %.2F c ', $x1*$this->k, ($h-$y1)*$this->k,
            $x2*$this->k, ($h-$y2)*$this->k, $x3*$this->k, ($h-$y3)*$this->k));
    }
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
        $this->Cell(30,5,utf8_decode('REPORTE DE ARCHIVO POR NOMBRE DE C.S.I'),0,1,'C');
//fecha y hora del reporte
        $this->SetFont('Arial','',7);
        $this->Cell(80);
        $this->Cell(30,3,'FECHA Y HORA'.' : '.date('d/m/Y - H:i:s'),0,1,'C');
        $this->Cell(80);
        $this->Cell(30,3,'USUARIO'.' : '.'TTTTTTTTTTTTTTT',0,1,'C');
        $this->Ln(4);
//datos generales de archivo y carpeta
       $this->Cell(10);
            $this->SetFont('Arial','UB',9);
            //izquierda,abajo,ancho,alto
                $this->RoundedRect(15,56,185,31,3,'1234','D').$this->Cell(50,4,'DATOS DE CARPETA',0,0,'L');
                $this->Ln(9);
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,4,'ADJUDICATARIO',0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,4,utf8_decode(_ADJUDICATARIO),0,1,'L');
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,4,'FECHA INICIAL',0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(45,4,utf8_decode(_FEC_INI),0,0,'L');
            $this->SetFont('Arial','B',8);
                $this->Cell(35,4,'FECHA FINAL',0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,4,utf8_decode(_FEC_FIN),0,1,'L');
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,4,'CI',0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(45,4,utf8_decode(_CI),0,0,'L');
            $this->SetFont('Arial','B',8);
                $this->Cell(35,4,utf8_decode('Nª HOJA DE RUTA'),0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,4,utf8_decode(_HRU_CAR),0,1,'L');
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,4,utf8_decode('DESCRIPCIÓN'),0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->MultiCell(120,4,utf8_decode(_DES_CAR), 0, 'L');
                $this->Ln(15);
        $this->Cell(10);
            $this->SetFont('Arial','UB',9);
                $this->RoundedRect(15,96,185,15,2,'1234','D').$this->Cell(50,4,'DATOS GENERALES',0,0,'L');
                $this->Ln(9);
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,4,utf8_decode('Nª DE CAJA'),0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(45,4,utf8_decode(_NCJ_ARC),0,0,'L');
            $this->SetFont('Arial','B',8);
                $this->Cell(35,4,utf8_decode('Nª DE TOMO'),0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,4,utf8_decode(_NTM_ARC),0,1,'L');
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,4,utf8_decode('Nª DE FOJAS'),0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(45,4,utf8_decode(_FOJ_ARC),0,0,'L');
            $this->SetFont('Arial','B',8);
                $this->Cell(35,4,'CUBIERTA',0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,4,utf8_decode(_CUB_ARC),0,1,'L');
                $this->Ln(7);
        $this->Cell(10);
            $this->SetFont('Arial','UB',9);
                $this->RoundedRect(15,120,185,20,3,'1234','D').$this->Cell(50,4,utf8_decode('DATOS TÉCNICOS'),0,0,'L');
                $this->Ln(9);
        $this->Cell(10);
                $this->SetFont('Arial','B',8);
                $this->Cell(50,4,utf8_decode('URBANIZACIÓN'),0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,4,utf8_decode(_NPR_DTE),0,1,'L');
        $this->Cell(10);
                $this->SetFont('Arial','B',8);
                $this->Cell(50,4,'LUGAR',0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,4,utf8_decode(_LUG_DTE),0,1,'L');
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,4,'SECTOR',0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(45,4,utf8_decode(_SEC_DTE),0,0,'L');
            $this->SetFont('Arial','B',8);
                $this->Cell(35,4,'PLAN',0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,4,utf8_decode(_PLN_DTE),0,1,'L');
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,4,'MANZANO',0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(45,4,utf8_decode(_MAN_DTE),0,0,'L');
            $this->SetFont('Arial','B',8);
                $this->Cell(35,4,'LOTE',0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,4,utf8_decode(_LOT_DTE),0,1,'L');
                $this->Ln(5);
                $this->Cell(10);
            $this->SetFont('Arial','UB',9);
                $this->RoundedRect(15,150,185,13,2,'1234','D').$this->Cell(50,4,utf8_decode('UBICACIÓN FÍSICA'),0,0,'L');
                $this->Ln(9);
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,4,'AMBIENTE',0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(45,4,utf8_decode(_AMB_UBI),0,0,'L');
            $this->SetFont('Arial','B',8);
                $this->Cell(35,4,'ESTANTE',0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,4,utf8_decode(_EST_UBI),0,1,'L');
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,4,'CUERPO',0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(45,4,utf8_decode(_CUE_UBI),0,0,'L');
            $this->SetFont('Arial','B',8);
                $this->Cell(35,4,'BALDA',0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,4,utf8_decode(_BAL_UBI),0,1,'L');
                $this->Ln(7);
                $this->Cell(10);
            $this->SetFont('Arial','UB',9);
                $this->RoundedRect(15,174,185,27,3,'1234','D').$this->Cell(50,4,utf8_decode('ÁREA'),0,0,'L');
                $this->Ln(9);
                $this->Cell(10);
                $this->SetFont('Arial','B',8);
                $this->Cell(50,4,utf8_decode('NOMBRE DEL PRODUCTOR'),0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,4,utf8_decode(_PRO_AREA),0,1,'L');
        $this->Cell(10);
                $this->SetFont('Arial','B',8);
                $this->Cell(50,4,utf8_decode('OBSERVACIÓN'),0,0,'L');
                $this->Cell(3,4,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->MultiCell(120,7,utf8_decode(_OBS_AREA), 0, 'L');
        $this->Cell(10);
        $this->Ln(1);
      //  $this->SetFillColor(255,20,147);
        //$this->Rect(10,100,90,50,'F');
      

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


foreach($result->result() as $result):
    DEFINE('_ADJUDICATARIO',$result->NOM_CAR);
    DEFINE('_CI',$result->CI_CAR);
    DEFINE('_FEC_INI',$result->FEC_INI);
    DEFINE('_FEC_FIN',$result->FEC_INI);
    DEFINE('_HRU_CAR',$result->HRU_CAR);
    DEFINE('_FEC_INI',$result->FEC_INI);
    DEFINE('_DES_CAR',$result->DES_CAR);
    DEFINE('_NCJ_ARC',$result->NCJ_ARC);
    DEFINE('_FOJ_ARC',$result->FOJ_ARC);
    DEFINE('_NTM_ARC',$result->NTM_ARC);
    DEFINE('_CUB_ARC',$result->CUB_ARC);
    DEFINE('_NPR_DTE',$result->NPR_DTE);
    DEFINE('_LUG_DTE',$result->LUG_DTE);
    DEFINE('_SEC_DTE',$result->SEC_DTE);
    DEFINE('_MAN_DTE',$result->MAN_DTE);
    DEFINE('_PLN_DTE',$result->PLN_DTE);
    DEFINE('_LOT_DTE',$result->LOT_DTE);
    DEFINE('_AMB_UBI',$result->AMB_UBI);
    DEFINE('_CUE_UBI',$result->CUE_UBI);
    DEFINE('_EST_UBI',$result->EST_UBI);
    DEFINE('_BAL_UBI',$result->BAL_UBI);
    DEFINE('_PRO_AREA',$result->PRO_AREA);
    DEFINE('_OBS_AREA',$result->OBS_AREA);
endforeach;


$pdf = new PDF();
ob_end_clean();

//INICIALIZA PAGINA PDF
$pdf->Open();
$pdf->AddPage('P','Letter');
$pdf->AliasNbPages();
$pdf->SetFontSize(10);
$pdf->SetFont('Arial','B',10);
//CONTENIDO
$pdf->Output('REPORTE-ARCHIVO'.".pdf","I");


?>
