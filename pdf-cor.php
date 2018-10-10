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
$pdf->setSourceFile("FORMNEW.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useImportedPage($tplIdx, 10, 10, 185);

//id
@$id = $_GET['id'];
if ($id != ''){
	//sql
	$sql = "SELECT * FROM ssen_tb where id = $id";


	$result = $conn->query($sql);
	$value = mysqli_fetch_object($result);
	$appno=$value->CRapplicantno;
	$CRdateissued=$value->CRdateissued;
	$CRregtype=$value->CRregtype;
	$CRtin=$value->CRtin;
	$CRshipnumber=$value->CRshipnumber;
	$CRnameofvessel=$value->CRnameofvessel;
	$CRhullidno=$value->CRhullidno;
	$CRdecalno=$value->CRdecalno;
	$CRexpirationdate=$value->CRexpirationdate;
	$CRlastname=$value->CRlastname;
	$CRfirstname=$value->CRfirstname;
	$CRmiddlein=$value->CRmiddlein;
	$CRnameofboat=$value->CRnameofboat;
	$CRcolor=$value->CRcolor;
	$CRlength=$value->CRlength;
	$CRyear=$value->CRyear;
	$CRcity=$value->CRcity;
	$CRdistrict=$value->CRdistrict;
	$CRzipcode=$value->CRzipcode;
	$CRtype=$value->CRtype;
	$CRhull=$value->CRhull;
	$CRuse=$value->CRuse;
	$CRpropulsion=$value->CRpropulsion;
	$CRfuel=$value->CRfuel;
	$CRhaulingport=$value->CRhaulingport;
	$CRindimotormanu1=$value->CRindimotormanu1;
	$CRhp1=$value->CRhp1;
	$CRmotor1serial=$value->CRmotor1serial;
	$CRportofdocu=$value->CRportofdocu;
	$CRindimotormanu2=$value->CRindimotormanu2;
	$CRhp2=$value->CRhp2;
	$CRmotor1seria2=$value->CRmotor1seria2;



	// now write some text above the imported page
	$pdf->SetFont('Helvetica','',8);
	$pdf->SetTextColor(0, 0, 0);
	$pdf->SetXY(30, 30);
	$pdf->Write(75, $appno);
	$pdf->SetXY(40, 30);
	$pdf->Write(90, $CRdateissued);
	$pdf->SetXY(85, 30);
	$pdf->Write(90, $CRregtype);
	$pdf->SetXY(125, 30);
	$pdf->Write(90, $CRtin);
	$pdf->SetXY(155, 30);
	$pdf->Write(90, $CRshipnumber);
	$pdf->SetXY(20, 38);
	$pdf->Write(90, $CRnameofvessel);
	$pdf->SetXY(67, 38);
	$pdf->Write(90, $CRhullidno);
	$pdf->SetXY(123, 38);
	$pdf->Write(90, $CRdecalno);
	$pdf->SetXY(155, 38);
	$pdf->Write(90, $CRexpirationdate);
	$pdf->SetXY(20, 47);
	$pdf->Write(90, $CRlastname);
	$pdf->SetXY(45, 47);
	$pdf->Write(90, $CRfirstname);
	$pdf->SetXY(75, 47);
	$pdf->Write(90, $CRmiddlein);
	$pdf->SetXY(90, 50);
	$pdf->Write(90, $CRnameofboat);
	$pdf->SetXY(120, 47);
	$pdf->Write(90, $CRcolor);
	$pdf->SetXY(140, 47);
	$pdf->Write(90, $CRlength);
	$pdf->SetXY(166, 47);
	$pdf->Write(90, $CRyear);
	$pdf->SetXY(20, 60);
	$pdf->Write(90, $CRcity);
	$pdf->SetXY(48, 60);
	$pdf->Write(90, $CRdistrict);
	$pdf->SetXY(70, 60);
	$pdf->Write(90, $CRzipcode);
	$pdf->SetXY(90, 60);
	$pdf->Write(90, $CRtype);
	$pdf->SetXY(115, 60);
	$pdf->Write(90, $CRhull);
	$pdf->SetXY(127, 60);
	$pdf->Write(90, $CRuse);
	$pdf->SetXY(140, 60);
	$pdf->Write(90, $CRpropulsion);
	$pdf->SetXY(165, 60);
	$pdf->Write(90, $CRfuel);
	$pdf->SetXY(20, 75);
	$pdf->Write(90, $CRhaulingport);
	$pdf->SetXY(90, 80);
	$pdf->Write(90, $CRindimotormanu1);
	$pdf->SetXY(115, 75);
	$pdf->Write(90, $CRhp1);
	$pdf->SetXY(135, 75);
	$pdf->Write(90, $CRmotor1serial);
	$pdf->SetXY(20, 90);
	$pdf->Write(90, $CRportofdocu);
	$pdf->SetXY(90, 97);
	$pdf->Write(90, $CRindimotormanu2);
	$pdf->SetXY(115, 90);
	$pdf->Write(90, $CRhp2);
	$pdf->SetXY(135, 90);
	$pdf->Write(90, $CRmotor1seria2);
	$pdf->Output(); 
}
else{
	echo 'No data selected!';
}
$conn->close();
