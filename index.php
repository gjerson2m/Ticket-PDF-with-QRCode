<?php
require_once 'fpdf/fpdf.php';

$wPage = 80;
$hPage = 125;
$pdf = new FPDF('P', 'mm', array($wPage, $hPage));

$pdf->setMargins(5,5,5);
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->Cell(12.5,5,'',0,0);
$pdf->multiCell(0,5,$pdf->Image("logo.jpg", $pdf->GetX(), $pdf->GetY(), 45),0);
$pdf->Cell(0,7,'',0,1);
$pdf->multiCell(0,7,'CONSTANCIA DE PAGO',0,'C');

$pdf->Cell(0,5,'',0,1);

$pdf->SetFont('','B',8.2);
$pdf->Cell(15,4,'NOMBRE:',0,0,'L');
$pdf->SetFont('','');
$pdf->multiCell(0,4,utf8_decode('ÑAHUI GUERRA FAVIO ISÁCC'),0,'L');

$pdf->Cell(0,1,'','B',1);
$pdf->Cell(35,10,'PAGO DE CREDITO',0,0,'L');
$pdf->Cell(0,10,'S/ 1500.00',0,1,'L');
$pdf->Cell(0,1,'','T',1);

$pdf->SetFont('','B');
$pdf->cell(24,5,'FECHA Y HORA:',0,0,'L');
$pdf->SetFont('','');
$pdf->cell(0,5,'13/10/2022 11:35:23 a.m.',0,1,'L');
$pdf->SetFont('','B');
$pdf->cell(12,5,'CUOTA:',0,0,'L');
$pdf->SetFont('','');
$pdf->cell(17,5,'100 DE 100',0,1,'L');
$pdf->SetFont('','B');
$pdf->cell(15,5,'USUARIO:',0,0,'L');
$pdf->SetFont('','');
$pdf->cell(0,5,'eduardo.rosales',0,1,'L');
$pdf->SetFont('','B');
$pdf->cell(27,5,'PROXIMA CUOTA:',0,0,'L');
$pdf->SetFont('','');
$pdf->cell(0,5,'24/11/2022',0,1,'L');

$pdf->Cell(0,1,'','B',1);
$pdf->Ln();
$pdf->cell(20,5,'',0,0);
$pdf->multiCell(0,5,$pdf->Image("http://localhost/pdf_php/qr_generator.php?code=jgfjjksdifdsf7d7f5sfdrgfd5ds==", $pdf->GetX(), $pdf->GetY(), 30, 30, "png"),0);
$pdf->SetY(97);

$pdf->SetFont('','B');
$pdf->cell(0,5,'***RECLAMOS Y SUGERENCIAS: 955701570***',0,'C');

$pdf->Output('I','VoucherProgresando.pdf');

?>