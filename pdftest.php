<?php
use \setasign\Fpdi;
require('includes/pdf/fpdf.php');


require_once('includes/src/autoload.php');

// initiate FPDI
$pdf = new Fpdi\Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("FORMNEW.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useImportedPage($tplIdx, 10, 10, 185);

// now write some text above the imported page
$pdf->SetFont('Helvetica','',8);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY(30, 30);
$pdf->Write(75, '144');
$pdf->SetXY(40, 30);
$pdf->Write(90, '11-22-2018');
$pdf->SetXY(85, 30);
$pdf->Write(90, 'Reg-type');
$pdf->SetXY(125, 30);
$pdf->Write(90, 'TIN');
$pdf->SetXY(155, 30);
$pdf->Write(90, 'SHIP #');
$pdf->SetXY(20, 38);
$pdf->Write(90, 'Name of vessel');
$pdf->SetXY(67, 38);
$pdf->Write(90, 'HULL IDENTIFICATION NUMBER');
$pdf->SetXY(123, 38);
$pdf->Write(90, 'DECAL NO');
$pdf->SetXY(155, 38);
$pdf->Write(90, 'EXP date');
$pdf->SetXY(20, 47);
$pdf->Write(90, 'Lepiten');
$pdf->SetXY(45, 47);
$pdf->Write(90, 'Kevin Victor');
$pdf->SetXY(75, 47);
$pdf->Write(90, 'K.');
$pdf->SetXY(90, 50);
$pdf->Write(90, 'BOAT');
$pdf->SetXY(120, 47);
$pdf->Write(90, 'color');
$pdf->SetXY(140, 47);
$pdf->Write(90, 'Length');
$pdf->SetXY(166, 47);
$pdf->Write(90, 'Year');
$pdf->SetXY(20, 60);
$pdf->Write(90, 'City/Town');
$pdf->SetXY(48, 60);
$pdf->Write(90, 'District');
$pdf->SetXY(70, 60);
$pdf->Write(90, 'Zip Code');
$pdf->SetXY(90, 60);
$pdf->Write(90, 'TYPE');
$pdf->SetXY(115, 60);
$pdf->Write(90, 'Hull');
$pdf->SetXY(127, 60);
$pdf->Write(90, 'use');
$pdf->SetXY(140, 60);
$pdf->Write(90, 'propulsion');
$pdf->SetXY(165, 60);
$pdf->Write(90, 'FUEL');
$pdf->SetXY(20, 75);
$pdf->Write(90, 'PRINCIPAL MOORING AREA/HAULING PORT');
$pdf->SetXY(90, 80);
$pdf->Write(90, 'IMM #1');
$pdf->SetXY(115, 75);
$pdf->Write(90, 'H.P. #1 ');
$pdf->SetXY(135, 75);
$pdf->Write(90, 'MOTOR #1 SERIAL NUMBER');
$pdf->SetXY(20, 90);
$pdf->Write(90, 'PORT DOCUMENTATION ');
$pdf->SetXY(90, 97);
$pdf->Write(90, 'IMM #2');
$pdf->SetXY(115, 90);
$pdf->Write(90, 'H.P. #2');
$pdf->SetXY(135, 90);
$pdf->Write(90, 'MOTOR #2 SERIAL NUMBER');

$pdf->Output(); 