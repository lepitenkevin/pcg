<?php
		 $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname='ph_coastguarddb';


		$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
				 if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
         // echo 'Connected successfully';
         

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

<h1></h1>
<h1> </h1>

  <div class="row">
  
	<form enctype="multipart/form-data" action="addssenprocess.php" class="app-view"  id="myForm" method="POST" style="width:100%;">
	<div class="row">
<div class="column" style="background-color:#eee;">
    <h2>Application Form</h2>
    <p>Full Name: <input name="name" placeholder="Full name" type="text"></p>
	<p> <div style="width:300px;"class="input-group date" id="dp3" data-date-format="mm-dd-yyyy">Date Issued:&nbsp;&nbsp;&nbsp;<input name="date" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p>Age: <input name="age" placeholder="Age" type="text"></p>
	<p>Sex: <select name="sex" >
			  <option value="Male">Male</option>
			  <option value="Female">Female</option>
			</select></p>
	
	<p>Nationality: <input name="nationality" placeholder="Nationality" type="text"></p>
	<p>Residential Address: <input name="residentialaddress" placeholder="Residential Address" type="text"></p>
	<p>Business Address: <input name="businessaddress" placeholder="Business Address" type="text"></p>
	<p>Name of Vessel: <input name="nameofvessel" placeholder="Name of vessel" type="text"></p>
	<p>Call Sign: <input name="callsign" placeholder="Call Sign" type="text"></p>
	<p>Security Number: <input name="securitynumber" placeholder="Security Number" type="text"></p>
	<p>Former Name and Registry: <input name="formernameandregistry" placeholder="Former Name and Registry" type="text"></p>
	<p>Home Port: <input name="homeport" placeholder="Home Port" type="text"></p>
	<p>Name of Builder: <input name="nameofbuilder" placeholder="Name of Builder" type="text"></p>
	<p>Place Built: <input name="placebuilt" placeholder="Place Built" type="text"></p>
	<p>Year Build: <input name="yearbuild" placeholder="Year Build" type="text"></p>
	
	<p>Certificate Vessel Registry: <input name="certificatevesselregistry" placeholder="Certificate Vessel Registry" type="text"></p>
	<p>Material Hull: <input name="materialhull" placeholder="Material Hull" type="text"></p>
	<p> <div style="width:400px;"class="input-group date" id="dp3"  data-date-format="mm-dd-yyyy">Certificate Expiration date:&nbsp;&nbsp;&nbsp;<input name="certificateexpirationdate" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p>Length: <input name="length" placeholder="Length" type="text"></p>
	<p>Breadth: <input name="breadth" placeholder="Breadth" type="text"></p>
	<p>Depth: <input name="dedth" placeholder="Depth" type="text"></p>
	<p>Gross Tonnage: <input name="grosstonnage" placeholder="Gross Tonnage" type="text"></p>
	<p>Net Tonnage: <input name="nettonnage" placeholder="Net Tonnage" type="text"></p>
	<p>Dead Weight: <input name="deadweight" placeholder="Dead Weight" type="text"></p>
	<p>Engine Make: <input name="enginemake" placeholder="Engine Make" type="text"></p>
	<p>Serial Number: <input name="serialnumber" placeholder="Serial Number" type="text"></p>
	<p>Horse Power: <input name="horsepower" placeholder="Horse Power" type="text"></p>
	<p>Speed: <input name="speed" placeholder="Speed" type="text"></p>
  </div> 
  <div class="column" style="background-color:#ffe;">
    <h2>Certificate of Registration</h2>
    <p>Application # : <input name="CRapplicantno" placeholder="Application #" type="text"></p>
	<p> <div style="width:300px;"class="input-group date" id="dp3"  data-date-format="mm-dd-yyyy">Date Issued:&nbsp;&nbsp;&nbsp;<input name="crdate" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p>Reg type : <input name="CRregtype" placeholder="Reg type" type="text"></p>
	<p>TIN : <input name="CRtin" placeholder="TIN" type="text"></p>
	<p>Ship Number : <input name="CRshipnumber" placeholder="Ship Number" type="text"></p>
	<p>Name of Vessel : <input name="CRnameofvessel" placeholder="Name of Vessel" type="text"></p>
	<p>HULL IDENTIFICATION NUMBER : <input name="CRhullidno" placeholder="HULL IDENTIFICATION NUMBER" type="text"></p>
	<p>CRdecalno : <input name="CRdecalno" placeholder="CRdecalno" type="text"></p>
	<p> <div style="width:400px;"class="input-group date" id="dp3"  data-date-format="mm-dd-yyyy">CR Expiration date:&nbsp;&nbsp;&nbsp;<input name="CRexpirationdate" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	
	<p>Lastname : <input name="CRlastname" placeholder="Lastname" type="text"></p>
	<p>Firstname : <input name="CRfirstname" placeholder="Firstname" type="text"></p>
	<p>Middlein : <input name="CRmiddlein" placeholder="Middlein" type="text"></p>
	<p>Name of Boat : <input name="CRnameofboat" placeholder="Name of Boat" type="text"></p>
	<p>Color : <input name="CRcolor" placeholder="Color" type="text"></p>
	<p>Length : <input name="CRlength" placeholder="Length" type="text"></p>
	<p>Year : <input name="CRyear" placeholder="Year" type="text"></p>
	<p>City or Town : <input name="CRcity" placeholder="City or Town" type="text"></p>
	<p>District : <input name="CRdistrict" placeholder="District" type="text"></p>
	<p>Zipcode : <input name="CRzipcode" placeholder="Zipcode" type="text"></p>
	<p>Type : <input name="CRtype" placeholder="Type" type="text"></p>
	<p>Hull : <input name="CRhull" placeholder="Hull" type="text"></p>
	<p>USE : <input name="CRuse" placeholder="USE" type="text"></p>

	<p>Propulsion : <input name="CRpropulsion" placeholder="Propulsion" type="text"></p>
	<p>Fuel : <input name="CRfuel" placeholder="Fuel" type="text"></p>
	<p>Principal Mooring/Hauling Port : <input name="CRhaulingport" placeholder="Principal Mooring/Hauling Port" type="text"></p>
	<p>INDICATION MOTOR MANUFACTURER #1 : <input name="CRindimotormanu1" placeholder="INDICATION MOTOR MANUFACTURER #1" type="text"></p>
	<p>H.P. 1 : <input name="CRhp1" placeholder="H.P. 1" type="text"></p>
	<p>MOTOR #1 SERIAL NUMBER : <input name="CRmotor1serial" placeholder="MOTOR #1 SERIAL NUMBER" type="text"></p>
	<p>PORT DOCUMENTATION : <input name="CRportofdocu" placeholder="PORT DOCUMENTATION" type="text"></p>
	<p>INDICATION MOTOR MANUFACTURER #2 : <input name="CRindimotormanu2" placeholder="INDICATION MOTOR MANUFACTURER #2" type="text"></p>
	<p>H.P. 2 : <input name="CRhp2" placeholder="H.P. 2" type="text"></p>
	<p>MOTOR #2 SERIAL NUMBER : <input name="CRmotor1seria2" placeholder="MOTOR #2 SERIAL NUMBER" type="text"></p>
	<p>Remarks :<br> <textarea name="remarks" placeholder="Remarks" type="field" style="width:350px; height:250px"></textarea>
	<br><label>Add Picture</label>
							<input type="file" name="fileToUpload" id="fileToUpload" />
                  <br>
						 <button class="sbss-btn btn btn-primary" name="Submit" type="submit">Save</button>
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
			CRcolor:"required",
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
			CRcolor: "Please enter CRcolor",
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