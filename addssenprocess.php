<?php
require('includes/dbcon.php');
$target_dir = "uploaded-images/";
$uniquesavename=time().uniqid(rand());
$target_file = $target_dir . $uniquesavename.$_FILES["fileToUpload"]["name"];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
$imagetmp = 'http://localhost/pcg/'.$target_file;
$name = $_POST['name'];

$date2 = $_POST['date'];
$date1=date_create($date2);
$date = date_format($date1,"Y-m-d");
echo $date.'<br>';
$age = $_POST['age'];
$sex = $_POST['sex'];
$nationality = $_POST['nationality'];
$residentialaddress = $_POST['residentialaddress'];
$businessaddress = $_POST['businessaddress'];
$nameofvessel = $_POST['nameofvessel'];
$callsign = $_POST['callsign'];
$securitynumber = $_POST['securitynumber'];
$formernameandregistry = $_POST['formernameandregistry'];
$homeport = $_POST['homeport'];
$nameofbuilder = $_POST['nameofbuilder'];
$placebuilt = $_POST['placebuilt'];
$yearbuild = $_POST['yearbuild'];
$certificatevesselregistry = $_POST['certificatevesselregistry'];
$materialhull = $_POST['materialhull'];
$certificateexpirationdate2 = $_POST['certificateexpirationdate'];
echo $certificateexpirationdate2.'<br>';
$certificateexpirationdate1=date_create($certificateexpirationdate2);
$certificateexpirationdate = date_format($certificateexpirationdate1,"Y-m-d");
$length = $_POST['length'];
$breadth = $_POST['breadth'];
$dedth = $_POST['dedth'];
$grosstonnage = $_POST['grosstonnage'];
$nettonnage = $_POST['nettonnage'];
$deadweight  = $_POST['deadweight'];
$enginemake = $_POST['enginemake'];
$serialnumber = $_POST['serialnumber'];
$horsepower = $_POST['horsepower'];
$speed = $_POST['speed'];

$CRapplicantno = $_POST['CRapplicantno'];
$crdate2 = $_POST['crdate'];
$crdate1=date_create($crdate2);
$crdate = date_format($crdate1,"Y-m-d");
$CRregtype = $_POST['CRregtype'];
$CRtin = $_POST['CRtin'];
$CRshipnumber = $_POST['CRshipnumber'];
$CRnameofvessel = $_POST['CRnameofvessel'];
$CRhullidno = $_POST['CRhullidno'];
$CRdecalno = $_POST['CRdecalno'];
$CRexpirationdate = $_POST['CRexpirationdate'];
echo $CRexpirationdate.'<br>';
$CRlastname = $_POST['CRlastname'];
$CRfirstname = $_POST['CRfirstname'];
$CRmiddlein = $_POST['CRmiddlein'];
$CRnameofboat = $_POST['CRnameofboat'];
$CRcolor = $_POST['CRcolor'];
$CRlength = $_POST['CRlength'];
$CRyear = $_POST['CRyear'];
$CRcity = $_POST['CRcity'];
$CRdistrict = $_POST['CRdistrict'];
$CRzipcode = $_POST['CRzipcode'];
$CRtype = $_POST['CRtype'];
$CRhull = $_POST['CRhull'];
$CRuse = $_POST['CRuse'];
$CRpropulsion = $_POST['CRpropulsion'];
$CRfuel = $_POST['CRfuel'];
$CRhaulingport = $_POST['CRhaulingport'];
$CRindimotormanu1 = $_POST['CRindimotormanu1'];
$CRhp1 = $_POST['CRhp1'];
$CRmotor1serial = $_POST['CRmotor1serial'];
$CRportofdocu = $_POST['CRportofdocu'];
$CRindimotormanu2 = $_POST['CRindimotormanu2'];
$CRhp2 = $_POST['CRhp2'];
$CRmotor1seria2 = $_POST['CRmotor1seria2'];
$remarks = $_POST['remarks'];
echo $imagetmp;

$sql = "INSERT INTO ssen_tb(name, date, age, sex, nationality, residentialaddress, businessaddress, nameofvessel, callsign, picture, securitynumber, formernameandregistry, homeport, nameofbuilder, placebuilt, yearbuild, certificatevesselregistry, materialhull, certificateexpirationdate, length, breadth, dedth, grosstonnage, nettonnage, deadweight, enginemake, serialnumber, horsepower, speed, CRapplicantno, CRdateissued, CRregtype, CRtin, CRshipnumber, CRnameofvessel, CRhullidno, CRdecalno, CRexpirationdate, CRlastname, CRfirstname, CRmiddlein, CRnameofboat, CRcolor, CRlength, CRyear, CRcity, CRdistrict, CRzipcode, CRtype, CRhull, CRuse, CRpropulsion, CRfuel, CRhaulingport, CRindimotormanu1, CRhp1, CRmotor1serial, CRportofdocu, CRindimotormanu2, CRhp2, CRmotor1seria2, remarks) VALUES ('$name','$date','$age','$sex','$nationality','$residentialaddress','$businessaddress','$nameofvessel','$callsign','$imagetmp','$securitynumber','$formernameandregistry','$homeport','$nameofbuilder','$placebuilt','$yearbuild','$certificatevesselregistry','$materialhull','$certificateexpirationdate','$length','$breadth','$dedth','$grosstonnage','$nettonnage','$deadweight','$enginemake','$serialnumber','$horsepower','$speed','$CRapplicantno','$crdate','$CRregtype','$CRtin','$CRshipnumber','$CRnameofvessel','$CRhullidno','$CRdecalno','$CRexpirationdate','$CRlastname','$CRfirstname','$CRmiddlein','$CRnameofboat','$CRcolor','$CRlength','$CRyear','$CRcity','$CRdistrict','$CRzipcode','$CRtype','$CRhull','$CRuse','$CRpropulsion','$CRfuel','$CRhaulingport','$CRindimotormanu1','$CRhp1','$CRmotor1serial','$CRportofdocu','$CRindimotormanu2','$CRhp2','$CRmotor1seria2','$remarks')";
if ($conn->query($sql) === TRUE) {			
	 
	header("location: ssen.php?pageno=1");
	
} else {
	echo "directory NOT Added<br />";
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>