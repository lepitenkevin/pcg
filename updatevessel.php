<?php 
require('includes/dbcon.php');
if($_FILES["fileToUpload"]["name"] == '')
{
	$imagetmp = $_POST['picture'];
}
else{
	
	$target_dir = "uploaded-images/";
	$uniquesavename=time().uniqid(rand());
	$target_file = $target_dir . $uniquesavename.$_FILES["fileToUpload"]["name"];
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	$imagetmp = 'http://localhost/pcg/'.$target_file;
	echo $imagetmp;
}
$nameofvessel = $_POST['nameofvessel'];
echo $nameofvessel.'<br/>';
$grosstonnage = $_POST['grosstonnage'];
echo $grosstonnage.'<br/>';
$nettonnage = $_POST['nettonnage'];
echo $nettonnage.'<br/>';
$pssccssc2 = $_POST['pssccssc'];
$pssccssc1=date_create($pssccssc2);
$pssccssc = date_format($pssccssc1,"Y-m-d");
echo $pssccssc.'<br/>';

$copcspecialpermit2 = $_POST['copcspecialpermit'];
$copcspecialpermit1=date_create($copcspecialpermit2);
$copcspecialpermit = date_format($copcspecialpermit1,"Y-m-d");

echo $copcspecialpermit.'<br/>';

$msmc2 = $_POST['msmc'];
$msmc1=date_create($msmc2);
$msmc = date_format($msmc1,"Y-m-d");

echo $msmc.'<br/>';

$loadlinecertificate2 = $_POST['loadlinecertificate'];
$loadlinecertificate1=date_create($loadlinecertificate2);
$loadlinecertificate = date_format($loadlinecertificate1,"Y-m-d");

echo $loadlinecertificate.'<br/>';

$coastwiselicense2 = $_POST['coastwiselicense'];
$coastwiselicense1=date_create($coastwiselicense2);
$coastwiselicense = date_format($coastwiselicense1,"Y-m-d");

echo $coastwiselicense.'<br/>';

$docofcompliance2 = $_POST['docofcompliance'];
$docofcompliance1=date_create($docofcompliance2);
$docofcompliance = date_format($docofcompliance1,"Y-m-d");

echo $docofcompliance.'<br/>';

$certofcompliance2 = $_POST['certofcompliance'];
$certofcompliance1=date_create($certofcompliance2);
$certofcompliance = date_format($certofcompliance1,"Y-m-d");

echo $certofcompliance.'<br/>';

$safetymancertificate2 = $_POST['safetymancertificate'];
$safetymancertificate1=date_create($safetymancertificate2);
$safetymancertificate = date_format($safetymancertificate1,"Y-m-d");

echo $safetymancertificate.'<br/>';

$certofstability2 = $_POST['certofstability'];
$certofstability1=date_create($certofstability2);
$certofstability = date_format($certofstability1,"Y-m-d");

echo $certofstability.'<br/>';

$shipstationlicense2 = $_POST['shipstationlicense'];
$shipstationlicense1=date_create($shipstationlicense2);
$shipstationlicense = date_format($shipstationlicense1,"Y-m-d");

echo $shipstationlicense.'<br/>';

$paip2 = $_POST['paip'];
$paip1=date_create($paip2);
$paip = date_format($paip1,"Y-m-d");

echo $paip.'<br/>';

$capacity = $_POST['capacity'];
$remarks = $_POST['remarks'];
echo $imagetmp;

$id = $_POST['id'];

$sql = "UPDATE vessel_tb SET nameofvessel='$nameofvessel', grosstonnage='$grosstonnage', nettonnage='$nettonnage', pssccssc='$pssccssc', copcspecialpermit='$copcspecialpermit', msmc='$msmc',loadlinecertificate='$loadlinecertificate',coastwiselicense='$coastwiselicense', docofcompliance='$docofcompliance',certofcompliance='$certofcompliance',safetymancertificate='$safetymancertificate', certofstability='$certofstability', shipstationlicense='$shipstationlicense', paip='$paip', capacity='$capacity', picture='$imagetmp',remarks='$remarks'  WHERE id=$id";
if ($conn->query($sql) === TRUE) {			
	 
	header("location: vessel-view.php?id=$id");
	echo 'success';
	
} else {
	echo "directory NOT Added<br />";
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>