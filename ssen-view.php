<?php
require('includes/dbcon.php');
$id = $_GET['id'];
$sql = "SELECT * FROM ssen_tb where id = $id";
$result = $conn->query($sql);
$value = mysqli_fetch_object($result);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/bootstrap.bundle.js"></script>
	 <link rel="stylesheet" href="css/bootstrap-datepicker3.css"/>

	
	<title>PCG Vessel Monitoring System</title>
	<style>
	* {
		box-sizing: border-box;
	}

	/* Create two equal columns that floats next to each other */
	.column {
		float: left;
		width: 50%;
		padding: 10px;

	}

	/* Clear floats after the columns */
	.row:after {
		content: "";
		display: table;
		clear: both;
	}
	input{
		width: 300px;
	}
</style>
  </head>
<body>

<br>

<div class="container text-center">
  
	<div class="row">
	
		<div class="col-sm-4">
		  <img src="images/logoc.png" class="img-responsive"  width="120" height="100" alt="PCG logo">
		</div>
		<div class="col-sm-4 headtext">
		  <strong> 
		  <p>Philippine Coast Guard</p>
		  <p>HEADQUARTERS COAST GUARD DISTRICT CENTRAL VISAYAS</p><p>COAST GUARD SUB-STATION TABUELAN</p>
		  <p>Sitio Quasi, Poblacion, Tabuelan, Cebu</p></strong>
		
		</div>
		<div class="col-sm-4">
		  <img src="images/dotclogo.png" class="img-responsive"  width="120" height="110" alt="PCG logo">
		</div>
	 </div>
</div>

<div class="container">
<nav class="nav">
  <a class="nav-link" href="dashboard.php">DASHBOARD</a>
  <a class="nav-link active" href="ssen.php?pageno=1">SSEN</a>
  <a class="nav-link" href="vessel.php?pageno=1">VESSELS</a>
</nav>


<div class="btn-group">
    <a href="ssen.php?pageno=1" class="btn btn-primary">
        <i class="fas fa-arrow-left"></i>
        <span><strong>Back</strong></span>            
    </a>
</div>

<br>

<h1>Update SSEN Info Page</h1>
<h1> </h1>
<div class="btn-group">
    <a href="pdf-app.php?id=<?php echo $value->id;?>" target="_blank" class="btn btn-primary">
        <i class="fas fa-print"></i>
        <span><strong>Print Application form</strong></span>            
    </a>
</div>
<div class="btn-group">
    <a href="pdf-cor.php?id=<?php echo $value->id;?>" target="_blank" class="btn btn-primary">
        <i class="fas fa-print"></i>
        <span><strong>Print Certificate of Registration</strong></span>            
    </a>
</div>
  <div class="row">
  
	<form enctype="multipart/form-data" action="updatessen.php" class="app-view"  id="myForm" method="POST" style="width:100%;">
	
	<div class="row">
	
<div class="column" style="background-color:#eee;">

    <h2>Application Form</h2>
    <p>Full Name: <input name="name" placeholder="Full name" value="<?php echo $value->name;?>" type="text"></p>
	<p> <div style="width:300px;"class="input-group date" id="dp3" data-date="" data-date-format="mm-dd-yyyy">Date Issued:&nbsp;&nbsp;&nbsp;<input name="date" class="form-control" type="text" value="<?php echo $value->date;?>"><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p>Age: <input name="age" placeholder="Age" value="<?php echo $value->age;?>" type="text"></p>
	<p>Sex: <select name="sex" >
			  <option value="Male">Male</option>
			  <option value="Female">Female</option>
			</select></p>
	
	<p>Nationality: <input name="nationality" value="<?php echo $value->nationality;?>" placeholder="Nationality" type="text"></p>
	<p>Residential Address: <input name="residentialaddress" value="<?php echo $value->residentialaddress;?>" placeholder="Residential Address" type="text"></p>
	<p>Business Address: <input name="businessaddress" value="<?php echo $value->businessaddress;?>" placeholder="Business Address" type="text"></p>
	<p>Name of Vessel: <input name="nameofvessel" value="<?php echo $value->nameofvessel;?>" placeholder="Name of vessel" type="text"></p>
	<p>Call Sign: <input name="callsign" value="<?php echo $value->callsign;?>" placeholder="callsign" type="text"></p>
	<p>Security Number: <input name="securitynumber" value="<?php echo $value->securitynumber;?>" placeholder="securitynumber" type="text"></p>
	<p>Former Name and Registry: <input name="formernameandregistry" value="<?php echo $value->formernameandregistry;?>" placeholder="formernameandregistry" type="text"></p>
	<p>Home Port: <input name="homeport" placeholder="homeport" value="<?php echo $value->homeport;?>" type="text"></p>
	<p>Name of Builder: <input name="nameofbuilder" placeholder="nameofbuilder" value="<?php echo $value->nameofbuilder;?>" type="text"></p>
	<p>Place Built: <input name="placebuilt" value="<?php echo $value->placebuilt;?>" placeholder="placebuilt" type="text"></p>
	<p>Year Build: <input name="yearbuild" value="<?php echo $value->yearbuild;?>" placeholder="yearbuild" type="text"></p>
	
	<p>Certificate Vessel Registry: <input name="certificatevesselregistry" value="<?php echo $value->certificatevesselregistry;?>" placeholder="certificatevesselregistry" type="text"></p>
	<p>Material Hull: <input name="materialhull" placeholder="materialhull" value="<?php echo $value->materialhull;?>" type="text"></p>
	<p> <div style="width:400px;"class="input-group date" id="dp3" data-date="" data-date-format="mm-dd-yyyy">Certificate Expiration date:&nbsp;&nbsp;&nbsp;<input name="certificateexpirationdate" value="<?php echo $value->certificateexpirationdate;?>" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p>Length: <input name="length" value="<?php echo $value->length;?>" placeholder="length" type="text"></p>
	<p>Breadth: <input name="breadth" value="<?php echo $value->breadth;?>" placeholder="breadth" type="text"></p>
	<p>Depth: <input name="dedth" placeholder="depth" value="<?php echo $value->dedth;?>" type="text"></p>
	<p>Gross Tonnage: <input name="grosstonnage" value="<?php echo $value->grosstonnage;?>" placeholder="grosstonnage" type="text"></p>
	<p>Net Tonnage: <input name="nettonnage" value="<?php echo $value->nettonnage;?>" placeholder="nettonnage" type="text"></p>
	<p>Dead Weight: <input name="deadweight" value="<?php echo $value->deadweight;?>" placeholder="deadweight" type="text"></p>
	<p>Engine Make: <input name="enginemake" value="<?php echo $value->enginemake;?>" placeholder="enginemake" type="text"></p>
	<p>Serial Number: <input name="serialnumber" value="<?php echo $value->serialnumber;?>" placeholder="serialnumber" type="text"></p>
	<p>Horse Power: <input name="horsepower" value="<?php echo $value->horsepower;?>" placeholder="horsepower" type="text"></p>
	<p>Speed: <input name="speed" placeholder="speed" value="<?php echo $value->speed;?>" type="text"></p>
  </div> 
  <div class="column" style="background-color:#ffe;">
    <h2>Certificate of Registration</h2>
    <p>Application # : <input name="CRapplicantno" value="<?php echo $value->CRapplicantno;?>" placeholder="CRapplicantno" type="text"></p>
	<p> <div style="width:300px;"class="input-group date" id="dp3" data-date="" data-date-format="mm-dd-yyyy">Date Issued:&nbsp;&nbsp;&nbsp;<input name="crdate" value="<?php echo $value->CRdateissued;?>" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p>Reg type : <input name="CRregtype" value="<?php echo $value->CRregtype;?>" placeholder="CRregtype" type="text"></p>
	<p>TIN : <input name="CRtin" placeholder="CRtin" value="<?php echo $value->CRtin;?>" type="text"></p>
	<p>Ship Number : <input name="CRshipnumber" value="<?php echo $value->CRshipnumber;?>" placeholder="CRshipnumber" type="text"></p>
	<p>Name of Vessel : <input name="CRnameofvessel" value="<?php echo $value->CRnameofvessel;?>" placeholder="CRnameofvessel" type="text"></p>
	<p>HULL IDENTIFICATION NUMBER : <input name="CRhullidno" value="<?php echo $value->CRhullidno;?>" placeholder="CRhullidno" type="text"></p>
	<p>Decal # : <input name="CRdecalno" value="<?php echo $value->CRdecalno;?>" placeholder="CRdecalno" type="text"></p>
	<p> <div style="width:400px;"class="input-group date" id="dp3" data-date="" data-date-format="mm-dd-yyyy">Expiration date:&nbsp;&nbsp;&nbsp;<input name="CRexpirationdate" value="<?php echo $value->CRexpirationdate;?>" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	
	<p>Lastname : <input name="CRlastname" value="<?php echo $value->CRlastname;?>" placeholder="CRlastname" type="text"></p>
	<p>Firstname : <input name="CRfirstname" value="<?php echo $value->CRfirstname;?>" placeholder="CRfirstname" type="text"></p>
	<p>Middlein : <input name="CRmiddlein" value="<?php echo $value->CRmiddlein;?>" placeholder="CRmiddlein" type="text"></p>
	<p>Name of Boat : <input name="CRnameofboat" value="<?php echo $value->CRnameofboat;?>" placeholder="CRnameofboat" type="text"></p>
	<p>Color : <input name="CRcolor" placeholder="CRcolor" type="text"></p>
	<p>Length : <input name="CRlength" value="<?php echo $value->CRlength;?>" placeholder="CRlength" type="text"></p>
	<p>Year : <input name="CRyear" value="<?php echo $value->CRyear;?>" placeholder="CRyear" type="text"></p>
	<p>City or Town : <input name="CRcity" value="<?php echo $value->CRcity;?>" placeholder="CRcity" type="text"></p>
	<p>District : <input name="CRdistrict" value="<?php echo $value->CRdistrict;?>" placeholder="CRdistrict" type="text"></p>
	<p>Zipcode : <input name="CRzipcode" value="<?php echo $value->CRzipcode;?>" placeholder="CRzipcode" type="text"></p>
	<p>Type : <input name="CRtype" placeholder="CRtype" value="<?php echo $value->CRtype;?>" type="text"></p>
	<p>Hull : <input name="CRhull" placeholder="CRhull" value="<?php echo $value->CRhull;?>" type="text"></p>
	<p>USE : <input name="CRuse" placeholder="CRuse" value="<?php echo $value->CRuse;?>" type="text"></p>

	<p>Propulsion : <input name="CRpropulsion" value="<?php echo $value->CRpropulsion;?>" placeholder="CRpropulsion" type="text"></p>
	<p>Fuel : <input name="CRfuel" placeholder="CRfuel" value="<?php echo $value->CRfuel;?>" type="text"></p>
	<p>Principal Mooring/Hauling Port : <input name="CRhaulingport" value="<?php echo $value->CRhaulingport;?>" placeholder="CRhaulingport" type="text"></p>
	<p>INDICATION MOTOR MANUFACTURER #1: <input name="CRindimotormanu1" value="<?php echo $value->CRindimotormanu1;?>" placeholder="CRindimotormanu1" type="text"></p>
	<p>H.P. 1 : <input name="CRhp1" placeholder="CRhp1" value="<?php echo $value->CRhp1;?>" type="text"></p>
	<p>MOTOR #1 SERIAL NUMBER : <input name="CRmotor1serial" value="<?php echo $value->CRmotor1serial;?>" placeholder="CRmotor1serial" type="text"></p>
	<p>PORT DOCUMENTATION : <input name="CRportofdocu" value="<?php echo $value->CRportofdocu;?>" placeholder="CRportofdocu" type="text"></p>
	<p>INDICATION MOTOR MANUFACTURER #2 : <input name="CRindimotormanu2" value="<?php echo $value->CRindimotormanu2;?>" placeholder="CRindimotormanu2" type="text"></p>
	<p>H.P. 2 : <input name="CRhp2" placeholder="CRhp1" value="<?php echo $value->CRhp1;?>" type="text"></p>
	<p>MOTOR #2 SERIAL NUMBER : <input name="CRmotor1seria2" value="<?php echo $value->CRmotor1seria2;?>" placeholder="CRmotor1seria2" type="text"></p>
	<p>Remarks :<br> <textarea name="remarks" placeholder="Remarks" type="field" style="width:350px; height:250px"><?php echo $value->remarks;?></textarea>
	<br>
	<label>Change Picture</label>
							<input type="file" name="fileToUpload" id="fileToUpload" /><br>
							<input name="picture" value="<?php echo $value->picture;?>"  type="hidden">
							<input name="id" value="<?php echo $value->id;?>"  type="hidden">
							<img src="<?php echo $value->picture;?>" width="200" height="150"/>
              <br>
		   <button class="sbss-btn btn btn-primary" name="Submit" onclick="return confirm('Are you sure you want to update?')" type="submit">Update</button>
			&nbsp&nbsp&nbsp&nbsp&nbsp <a class="sbss-btn btn btn-primary" style="background-color:red;"href="deletessen.php?id=<?php echo $value->id;?>" onclick="return confirm('Are you sure you want to Delete it?')"/>Delete</a>
  </div>
                
							
                    
                       
                            
                
	</div>
	</form>
  </div>
</div>
<div class="container">
   
</div>


<script src="js/bootstrap-datepicker.min.js"></script>
<script>
	$(document).ready(function(){
				var date_input=$('.date'); //our date input has the name "date"
				var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
				date_input.datepicker({
					format: 'yyyy-mm-dd',
					container: container,
					todayHighlight: true,
					autoclose: true,
				});
    });
</script>
<script>

$(function() {
  
    // Setup form validation on the #register-form element
	$("#myForm").validate({
    
        // Specify the validation rules
        rules: {
            name: "required",
			date: {
                required: true,
                date: true
            },
            age: "required",
            sex: "required",
            nationality: "required",
            residentialaddress:"required",
            businessaddress:"required",
			nameofvessel:"required",
			callsign:"required",
			securitynumber:"required",
			formernameandregistry:"required",
			homeport:"required",
			nameofbuilder:"required",
			placebuilt:"required",
			yearbuild:"required",
			certificatevesselregistry:"required",
			placebuilt:"required",
			materialhull:"required",
			certificateexpirationdate: {
                required: true,
                date: true
            },
			length:"required",
			breadth:"required",
			dedth:"required",
			grosstonnage:"required",
			nettonnage:"required",
			deadweight:"required",
			enginemake:"required",
			serialnumber:"required",
			horsepower:"required",
			speed:"required",
			
			CRapplicantno:"required",
			crdate: {
                required: true,
                date: true
            },
			CRregtype:"required",
			CRtin:"required",
			CRshipnumber:"required",
			CRnameofvessel:"required",
			CRhullidno:"required",
			CRdecalno:"required",
			CRexpirationdate:{
                required: true,
                date: true
            },
			CRlastname:"required",
			CRfirstname:"required",
			CRmiddlein:"required",
			CRnameofboat:"required",
			CRlength:"required",
			CRyear:"required",
			CRcity:"required",
			CRdistrict:"required",
			CRzipcode:"required",
			CRtype:"required",
			CRhull:"required",
			CRpropulsion:"required",
			CRfuel:"required",
			CRhaulingport:"required",
			CRindimotormanu1:"required",
			CRhp1:"required",
			CRmotor1serial:"required",
			CRportofdocu:"required",
			CRindimotormanu2:"required",
			CRhp2:"required",
			CRmotor1seria2:"required"
        },
		
        
        // Specify the validation error messages
        messages: {
            name: "Please enter your full name",
			date: "Please enter your date",
            age: "Please enter your age",
            sex: "Please enter your gender",
            nationality: "Please enter your nationality",
            residentialaddress: "Please enter residential address",
            businessaddress: "Please enter business address",
			nameofvessel: "Please enter vessel name",
			callsign: "Please enter call sign",
			securitynumber: "Please enter security number",
			formernameandregistry: "Please enter former name and registry",
			homeport: "Please enter homeport",
			nameofbuilder: "Please enter name of builder",
			placebuilt: "Please enter placebuilt",
			yearbuild: "Please enter yearbuild",
			certificatevesselregistry: "Please enter certificatevesselregistry",
			materialhull: "Please enter materialhull",
			certificateexpirationdate: "Please enter expiration date",
			length: "Please enter length",
			breadth: "Please enter breadth",
			dedth: "Please enter depth",
			grosstonnage: "Please enter grosstonnage",
			nettonnage: "Please enter nettonnage",
			deadweight: "Please enter deadweight",
			enginemake: "Please enter enginemake",
			serialnumber: "Please enter serialnumber",
			horsepower: "Please enter horsepower",
			speed: "Please enter speed",
			
			CRapplicantno: "Please enter CRapplicantno",
			crdate: "Please enter crdate",
			CRregtype: "Please enter CRregtype",
			CRtin: "Please enter CRtin",
			CRshipnumber: "Please enter CRshipnumber",
			CRnameofvessel: "Please enter CRnameofvessel",
			CRhullidno: "Please enter CRhullidno",
			CRdecalno: "Please enter CRdecalno",
			CRexpirationdate: "Please enter CRexpirationdate",
			CRlastname: "Please enter CRlastname",
			CRfirstname: "Please enter CRfirstname",
			CRmiddlein: "Please enter CRmiddlein",
			CRnameofboat: "Please enter CRnameofboat",
			CRlength: "Please enter CRlength",
			CRyear: "Please enter CRyear",
			CRcity: "Please enter CRcity",
			CRdistrict: "Please enter CRdistrict",
			CRzipcode: "Please enter CRzipcode",
			CRtype: "Please enter CRtype",
			CRhull: "Please enter horsepower",
			CRuse: "Please enter CRuse",
			CRpropulsion: "Please enter CRpropulsion",
			CRfuel: "Please enter CRfuel",
			CRhaulingport: "Please enter CRhaulingport",
			CRindimotormanu1: "Please enter CRindimotormanu1",
			CRhp1: "Please enter CRhp1",
			CRmotor1serial: "Please enter CRmotor1serial",
			CRportofdocu: "Please enter CRportofdocu",
			CRindimotormanu2: "Please enter CRindimotormanu2",
			CRhp2: "Please enter CRhp2",
			CRmotor1seria2: "Please enter CRmotor1seria2"
          
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

});

</script>

<div style="text-align:center;">Copyright © 2018 Philippine Coast Coastguard TABUELAN district </div><div style="text-align:center;">designed by Flexron Media Services</div></body>>
</html>
<?php $conn->close();?>