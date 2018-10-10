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
		width: 100%;
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
    <a href="vessel.php?pageno=1" class="btn btn-primary">
        <i class="fas fa-arrow-left"></i>
        <span><strong>Back</strong></span>            
    </a>
</div>

<br>

<h1></h1>
<h1> </h1>

  <div class="row">
  
	<form enctype="multipart/form-data" action="addvesselprocess.php" class="app-view"  id="myForm" method="POST" style="width:100%;">
	<div class="row">
<div class="column" style="background-color:#eee;">
    <h2>Add new Vessel</h2>
    <p>NAME OF VESSEL: <input name="nameofvessel" placeholder="NAME OF VESSEL" type="text"></p>
	<p>GROSS TONNAGE: <input name="grosstonnage" placeholder="GROSS TONNAGE" type="text"></p>
	<p>NET TONNAGE: <input name="nettonnage" placeholder="NET TONNAGE" type="text"></p>
	<p> <div style="width:700px;"class="input-group date" id="dp3" data-date-format="mm-dd-yyyy">PASSENGER SHIP SAFETY CERTIFICATE/ CARGO SHIP SAFETY CERTIFICATE:&nbsp;&nbsp;&nbsp;<input name="pssc-cssc" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p> <div style="width:700px;"class="input-group date" id="dp3" data-date-format="mm-dd-yyyy">CERTIFICATE OF PUBLIC CONVENIENCE/SPECIAL PERMIT:&nbsp;&nbsp;&nbsp;<input name="copc-specialpermit" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p> <div style="width:700px;"class="input-group date" id="dp3" data-date-format="mm-dd-yyyy">MINIMUM SAFE MANNING CERTIFICATE:&nbsp;&nbsp;&nbsp;<input name="msmc" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p> <div style="width:700px;"class="input-group date" id="dp3" data-date-format="mm-dd-yyyy">LOAD LINE CERTIFICATE:&nbsp;&nbsp;&nbsp;<input name="loadlinecertificate" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p> <div style="width:700px;"class="input-group date" id="dp3" data-date-format="mm-dd-yyyy">COASTWISE LICENSE:&nbsp;&nbsp;&nbsp;<input name="coastwiselicense" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p> <div style="width:700px;"class="input-group date" id="dp3" data-date-format="mm-dd-yyyy">DOCUMENT OF COMPLIANCE:&nbsp;&nbsp;&nbsp;<input name="docofcompliance" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p> <div style="width:700px;"class="input-group date" id="dp3" data-date-format="mm-dd-yyyy">CERTIFICATE OF COMPLIANCE:&nbsp;&nbsp;&nbsp;<input name="certofcompliance" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p> <div style="width:700px;"class="input-group date" id="dp3" data-date-format="mm-dd-yyyy">SAFETY MANAGEMENT CERTIFICATE:&nbsp;&nbsp;&nbsp;<input name="safetymancertificate" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p> <div style="width:700px;"class="input-group date" id="dp3" data-date-format="mm-dd-yyyy">CERTIFICATE OF STABILTY:&nbsp;&nbsp;&nbsp;<input name="certofstability" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p> <div style="width:700px;"class="input-group date" id="dp3" data-date-format="mm-dd-yyyy">SHIP STATION LICENSE:&nbsp;&nbsp;&nbsp;<input name="shipstationlicense" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p> <div style="width:700px;"class="input-group date" id="dp3" data-date-format="mm-dd-yyyy">PERSONNAL ACCIDENT INSURANCE POLICY:&nbsp;&nbsp;&nbsp;<input name="paip" class="form-control" type="text" value=""><span class="input-group-addon btn"><i class="fas fa-calendar" id="butt"></i></span></div></p>
	<p>Capacity: <input name="capacity" placeholder="Capacity" type="text"></p>
	<p>Remarks :<br> <textarea name="remarks" placeholder="Remarks" type="field" style="width:350px; height:250px"></textarea>
	<br>
	<label>Add Picture</label>
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
            nameofvessel: "required",
			grosstonnage: "required",
			nettonnage: "required",
		
            capacity: "required"
           
        },
		
        
        // Specify the validation error messages
        messages: {
			nameofvessel: "Please enter",
			grosstonnage: "Please enter",
            nettonnage: "Please enter",
   
			capacity: "Please enter"
	
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

});

</script>
<div style="text-align:center;">Copyright © 2018 Philippine Coast Coastguard TABUELAN district </div><div style="text-align:center;">designed by Flexron Media Services</div></body>>
</html>