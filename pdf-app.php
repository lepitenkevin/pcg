<?php

require('includes/dbcon.php');
use \setasign\Fpdi;
require('includes/pdf/fpdf.php');


require_once('includes/src/autoload.php');

// initiate FPDI
$pdf = new Fpdi\Fpdi();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("formapplication.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useImportedPage($tplIdx, 12, 10, 185);



//id
@$id = $_GET['id'];
if ($id != ''){
	$sql = "SELECT * FROM ssen_tb where id = $id";
	$result = $conn->query($sql);
	$value = mysqli_fetch_object($result);
	// now write some text above the imported page
	$pdf->SetFont('Helvetica','',8);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetXY(30, 30);
	$pdf->Image('images/dotclogo.png', 152, 77, 24);
	$pdf->SetXY(47, 30);
	$pdf->Write(95, $value->name);
	$pdf->SetXY(125, 30);
	$pdf->Write(95, $value->date);
	$pdf->SetXY(48, 36);
	$pdf->Write(95, $value->age);
	$pdf->SetXY(75, 36);
	$pdf->Write(95, $value->sex);
	$pdf->SetXY(125, 36);
	$pdf->Write(95, $value->nationality);
	$pdf->SetXY(66, 30);
	$pdf->Write(121, $value->residentialaddress);
	$pdf->SetXY(66, 30);
	$pdf->Write(133, $value->businessaddress);
	$pdf->SetXY(60, 30);
	$pdf->Write(155, $value->nameofvessel);
	$pdf->SetXY(125, 30);
	$pdf->Write(155, $value->callsign);
	$pdf->SetXY(62, 30);
	$pdf->Write(167, $value->securitynumber);
	$pdf->SetXY(77, 30);
	$pdf->Write(178, $value->formernameandregistry);
	$pdf->SetXY(53, 30);
	$pdf->Write(196, $value->homeport);
	$pdf->SetXY(128, 30);
	$pdf->Write(196, $value->nameofbuilder);
	$pdf->SetXY(52, 30);
	$pdf->Write(210, $value->placebuilt);
	$pdf->SetXY(128, 30);
	$pdf->Write(210, $value->yearbuild);
	$pdf->SetXY(42, 30);
	$pdf->Write(241, $value->certificatevesselregistry);
	$pdf->SetXY(76, 30);
	$pdf->Write(241, $value->materialhull);
	$pdf->SetXY(110, 30);
	$pdf->Write(241, $value->certificateexpirationdate);
	$pdf->SetXY(43, 115);
	$pdf->Write(95, $value->length);
	$pdf->SetXY(76, 115);
	$pdf->Write(95, $value->breadth);
	$pdf->SetXY(110, 115);
	$pdf->Write(95, $value->dedth);
	$pdf->SetXY(43, 124);
	$pdf->Write(95, $value->grosstonnage);
	$pdf->SetXY(76, 124);
	$pdf->Write(95, $value->nettonnage);
	$pdf->SetXY(110, 124);
	$pdf->Write(95, $value->deadweight);
	$pdf->SetXY(43, 137);
	$pdf->Write(95, $value->enginemake);
	$pdf->SetXY(68, 137);
	$pdf->Write(95, $value->serialnumber);
	$pdf->SetXY(94, 137);
	$pdf->Write(95, $value->horsepower);
	$pdf->SetXY(119, 137);
	$pdf->Write(95, $value->speed);
	$pdf->Output(); 
}
else{
	echo 'No data selected!';
}
$conn->close();








