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
        $this->Cell(30,3,'FECHA Y HORA : '.' : '.date('d/m/Y - H:i:s'),0,1,'C');
        $this->Ln(4);
//datos generales de archivo y carpeta
       $this->Cell(10);
            $this->SetFont('Arial','UB',9);
            //izquierda,abajo,ancho,alto
                $this->RoundedRect(15,54,185,45,5,'1234','D').$this->Cell(50,4,'DATOS DE CARPETA',0,0,'L');
                $this->Ln(9);
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,7,'ADJUDICATARIO',0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,7,utf8_decode('NAPO'),0,1,'L');
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,7,'FECHA INICIAL',0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(45,7,utf8_decode('INICIO_ACTIVIDAD'),0,0,'L');
            $this->SetFont('Arial','B',8);
                $this->Cell(35,7,'FECHA FINAL',0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,7,utf8_decode('FIN_ACTIVIDAD'),0,1,'L');
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,7,'CI',0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(45,7,utf8_decode('DEPATAMENTO'),0,0,'L');
            $this->SetFont('Arial','B',8);
                $this->Cell(35,7,utf8_decode('Nª HOJA DE RUTA'),0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,7,utf8_decode('ESTADO'),0,1,'L');
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,7,utf8_decode('DESCRIPCIÓN'),0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->MultiCell(120,7,utf8_decode('AQUI PONDREMOS UN EXPLICACIÓN PARA DESCRIBIR ALGUN PROCESO O EL TIPO DE FORMATO QUE SE ESTA DEFINIENDO O CUALQUIER OTRA COSA <span class="wp-smiley wp-emoji wp-emoji-tongue" title=":P">:P</span>'), 0, 'L');
                $this->Ln(9);
        $this->Cell(10);
            $this->SetFont('Arial','UB',9);
                $this->RoundedRect(15,114,185,15,5,'1234','D').$this->Cell(50,7,'DATOS GENERALES',0,0,'L');
                $this->Ln(9);
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,7,utf8_decode('Nª DE CAJA'),0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(45,7,utf8_decode('SECTOR'),0,0,'L');
            $this->SetFont('Arial','B',8);
                $this->Cell(35,7,utf8_decode('Nª DE TOMO'),0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,7,utf8_decode('Bs. '.'DEUDA_PRESUNTA'),0,1,'L');
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,7,utf8_decode('Nª DE FOJAS'),0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(45,7,utf8_decode('SECTOR'),0,0,'L');
            $this->SetFont('Arial','B',8);
                $this->Cell(35,7,'CUBIERTA',0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,7,utf8_decode('DEUDA_PRESUNTA'),0,1,'L');
                $this->Ln(7);
        $this->Cell(10);
            $this->SetFont('Arial','UB',9);
                $this->RoundedRect(15,144,185,30,5,'1234','D').$this->Cell(50,7,utf8_decode('DATOS TÉCNICOS'),0,0,'L');
                $this->Ln(9);
        $this->Cell(10);
                $this->SetFont('Arial','B',8);
                $this->Cell(50,7,utf8_decode('URBANIZACIÓN'),0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,7,utf8_decode('NAPO'),0,1,'L');
        $this->Cell(10);
                $this->SetFont('Arial','B',8);
                $this->Cell(50,7,'LUGAR',0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,7,utf8_decode('NAPO'),0,1,'L');
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,7,'SECTOR',0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(45,7,utf8_decode('SECTOR'),0,0,'L');
            $this->SetFont('Arial','B',8);
                $this->Cell(35,7,'PLAN',0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,7,utf8_decode('Bs. '.'DEUDA_PRESUNTA'),0,1,'L');
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,7,'MANZANO',0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(45,7,utf8_decode('SECTOR'),0,0,'L');
            $this->SetFont('Arial','B',8);
                $this->Cell(35,7,'LOTE',0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,7,utf8_decode('DEUDA_PRESUNTA'),0,1,'L');
                $this->Ln(7);
                $this->Cell(10);
            $this->SetFont('Arial','UB',9);
                $this->RoundedRect(15,188,185,15,5,'1234','D').$this->Cell(50,7,utf8_decode('UBICACIÓN FÍSICA'),0,0,'L');
                $this->Ln(9);
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,7,'AMBIENTE',0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(45,7,utf8_decode('SECTOR'),0,0,'L');
            $this->SetFont('Arial','B',8);
                $this->Cell(35,7,'ESTANTE',0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,7,utf8_decode('Bs. '.'DEUDA_PRESUNTA'),0,1,'L');
        $this->Cell(10);
            $this->SetFont('Arial','B',8);
                $this->Cell(50,7,'CUERPO',0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(45,7,utf8_decode('SECTOR'),0,0,'L');
            $this->SetFont('Arial','B',8);
                $this->Cell(35,7,'BALDA',0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,7,utf8_decode('DEUDA_PRESUNTA'),0,1,'L');
                $this->Ln(7);
                $this->Cell(10);
            $this->SetFont('Arial','UB',9);
                $this->RoundedRect(15,218,185,35,5,'1234','D').$this->Cell(50,7,utf8_decode('ÁREA'),0,0,'L');
                $this->Ln(9);
                $this->Cell(10);
                $this->SetFont('Arial','B',8);
                $this->Cell(50,7,utf8_decode('NOMBRE DEL PRODUCTOR'),0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->Cell(25,7,utf8_decode('NAPO'),0,1,'L');
        $this->Cell(10);
                $this->SetFont('Arial','B',8);
                $this->Cell(50,7,utf8_decode('OBSERVACIÓN'),0,0,'L');
                $this->Cell(3,7,utf8_decode(':'),0,0,'C');
                $this->SetFont('Arial','',8);$this->MultiCell(120,7,utf8_decode('AQUI PONDREMOS UN EXPLICACIÓN PARA DESCRIBIR ALGUN PROCESO O EL TIPO DE FORMATO QUE SE ESTA DEFINIENDO O CUALQUIER OTRA COSA <span class="wp-smiley wp-emoji wp-emoji-tongue" title=":P">:P</span>'), 0, 'L');
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
$pdf = new PDF();
ob_end_clean();

//INICIALIZA PAGINA PDF
$pdf->Open();
$pdf->AddPage('P','Letter');
$pdf->AliasNbPages();
$pdf->SetFontSize(10);
$pdf->SetFont('Arial','B',10);
//CONTENIDO
//for($i=1;$i<=80;$i++){  $pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);}
//FINALIZA Y MUESTRA EN PANTALLA PDF
$pdf->Output('REPORTE-ARCHIVO'.".pdf","I");


?>
