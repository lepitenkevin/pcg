<?php
	require('includes/dbcon.php');
$date = strtotime("2018-08-19");
$remaining = $date - time();
$days_remaining = floor($remaining / 86400);
$days_remaining = $days_remaining + 1;

if($days_remaining <= 25){
	echo "There are $days_remaining days  left";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	


	<title>PCG Vessel Monitoring System</title>
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
  <a class="nav-link active" href="dashboard.php">DASHBOARD</a>
  <a class="nav-link " href="ssen.php?pageno=1">SSEN</a>
  <a class="nav-link" href="vessel.php?pageno=1">VESSELS</a>
</nav>
<h1>Welcome to Dashboard</h1>
  <div class="row">

	<div class="column" style="background-color:#eee;">
<?php

?>
	<?php
			$sql = "SELECT * FROM ssen_tb";
	
	?>
            <table class="table table-striped table-condensed" style="font-size:13px; ">
                  <thead>
                  <tr>
                    <th>Applicant Number</th>
                    <th>Name</th>
					<th>Name of Vessel</th>		
					<th>Expiration date</th>
					<th style="color: red;">Notification</th>
                  </tr>
              </thead>   
              <tbody>
                
				<?php
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
					
					$date_now = date_create(date("Y-m-d"));
					$date_db = date_create($row['CRexpirationdate']);
					$date_diff = date_diff($date_now,$date_db);
					if(!empty($row['remarks'])){
						$notc = '<img src="images/rem.png" width="10" height="10"/>';
					}
					if($date_diff->format("%r%a") <= 25){
					echo '<tr><td><a href="ssen-view.php?id='.$row['id'].'">'.$row['CRapplicantno'].'</a><br>'.@$notc.'</td>';
					echo '<td>'.$row['name'].'</td>';
					echo '<td>'.$row['nameofvessel'].'</td>';
					echo '<td>'.$row['CRexpirationdate'].'</td>';
						if ($date_diff->format("%r%a") < 0 || $date_diff->format("%r%a") <= 0){
							echo '<td style="color: red;">Expired</td></tr>';
						}
						else{
							echo '<td style="color: red;">'.$date_diff->format("%r%a").' day/s to expire</td></tr>';
						}
					}
				?>
					
					
					<?php	
					} 
				}
				else {
					echo "0 results";
				}
		
				
				?>
                </tr>
                                                 
              </tbody>
            </table>
			</div>
			<div class="column" style="background-color:#ffe;padding:10px;">
				<?php
						$sql2 = "SELECT * FROM vessel_tb";
						$result2 = $conn->query($sql2);
						if ($result2->num_rows > 0) {
						while($row2 = $result2->fetch_assoc()) {
				?>
				
					<h4>VESSEL NAME: <a href="vessel-view.php?id=<?php echo $row2['id'];?>"><?php echo $row2['nameofvessel'];?></a></h4>
					<ul>
						<?php
						$date_now1 = date_create(date('Y-m-d'));
						$date_db1 = date_create($row2['pssccssc']);
						$date_diff1 = date_diff($date_now,$date_db1);
						?>
						<li>PASSENGER/CARGO SHIP SAFETY CERTIFICATE:
						<?php 
						
						if($date_diff1->format("%r%a") <= 25){
							if ($date_diff1->format("%r%a") < 0 || $date_diff1->format("%r%a") <= 0){
							echo '<br><span style="color:red;">Expired</span>';
							}
							else{
							echo '<br><span style="color:red;">'.$date_diff1->format("%r%a").' day/s to expire</span>';
							}
						}
						?>
						</li>
						<?php 
						$date_db2 = date_create($row2['copcspecialpermit']);
						$date_diff2 = date_diff($date_now1,$date_db2);
						?>
						<li>CERTIFICATE OF PUBLIC CONVENIENCE/SPECIAL PERMIT:
						<?php 
						if($date_diff2->format("%r%a") <= 25){
							if ($date_diff2->format("%r%a") < 0 || $date_diff2->format("%r%a") <= 0){
							echo '<br><span style="color:red;">Expired</span>';
							}
							else{
							echo '<br><span style="color:red;">'.$date_diff2->format("%r%a").' day/s to expire</span>';
							}
						}
						?>
						</li>
						<?php 
						$date_db3 = date_create($row2['msmc']);
						$date_diff3 = date_diff($date_now1,$date_db3);
						?>
						<li>MINIMUM SAFE MANNING CERTIFICATE:
						<?php 
						if($date_diff3->format("%r%a") <= 25){
							if ($date_diff3->format("%r%a") < 0 || $date_diff3->format("%r%a") <= 0){
							echo '<br><span style="color:red;">Expired</span>';
							}
							else{
							echo '<br><span style="color:red;">'.$date_diff3->format("%r%a").' day/s to expire</span>';
							}
						}
						?>
						</li>
						<?php 
						$date_db4 = date_create($row2['loadlinecertificate']);
						$date_diff4 = date_diff($date_now1,$date_db4);
						?>
						<li>LOAD LINE CERTIFICATE:
						<?php 
						if($date_diff4->format("%r%a") <= 25){
							if ($date_diff4->format("%r%a") < 0 || $date_diff4->format("%r%a") <= 0){
							echo '<br><span style="color:red;">Expired</span>';
							}
							else{
							echo '<br><span style="color:red;">'.$date_diff4->format("%r%a").' day/s to expire</span>';
							}
						}
						?>
						</li>
						<?php 
						$date_db5 = date_create($row2['coastwiselicense']);
						$date_diff5 = date_diff($date_now1,$date_db5);
						?>
						<li>COASTWISE LICENSE:
						<?php 
						if($date_diff5->format("%r%a") <= 25){
							if ($date_diff5->format("%r%a") < 0 || $date_diff5->format("%r%a") <= 0){
							echo '<br><span style="color:red;">Expired</span>';
							}
							else{
							echo '<br><span style="color:red;">'.$date_diff5->format("%r%a").' day/s to expire</span>';
							}
						}
						?>
						</li>
						<?php 
						$date_db6 = date_create($row2['docofcompliance']);
						$date_diff6 = date_diff($date_now1,$date_db6);
						?>
						<li>DOCUMENT OF COMPLIANCE:
						<?php 
						if($date_diff6->format("%r%a") <= 25){
							if ($date_diff6->format("%r%a") < 0 || $date_diff6->format("%r%a") <= 0){
							echo '<br><span style="color:red;">Expired</span>';
							}
							else{
							echo '<br><span style="color:red;">'.$date_diff6->format("%r%a").' day/s to expire</span>';
							}
						}
						?>
						</li>
						<?php 
						$date_db7 = date_create($row2['certofcompliance']);
						$date_diff7 = date_diff($date_now1,$date_db7);
						?>
						<li>CERTIFICATE OF COMPLIANCE:
						<?php 
						if($date_diff7->format("%r%a") <= 25){
							if ($date_diff7->format("%r%a") < 0 || $date_diff7->format("%r%a") <= 0){
							echo '<br><span style="color:red;">Expired</span>';
							}
							else{
							echo '<br><span style="color:red;">'.$date_diff7->format("%r%a").' day/s to expire</span>';
							}
						}
						?>
						</li>
						<?php 
						$date_db8 = date_create($row2['safetymancertificate']);
						$date_diff8 = date_diff($date_now1,$date_db8);
						?>
						<li>SAFETY MANAGEMENT CERTIFICATE:
						<?php 
						if($date_diff8->format("%r%a") <= 25){
							if ($date_diff8->format("%r%a") < 0 || $date_diff8->format("%r%a") <= 0){
							echo '<br><span style="color:red;">Expired</span>';
							}
							else{
							echo '<br><span style="color:red;">'.$date_diff8->format("%r%a").' day/s to expire</span>';
							}
						}
						?>
						</li>
						<?php 
						$date_db9 = date_create($row2['certofstability']);
						$date_diff9 = date_diff($date_now1,$date_db9);
						?>
						<li>CERTIFICATE OF STABILTY:
						<?php 
						if($date_diff9->format("%r%a") <= 25){
							if ($date_diff9->format("%r%a") < 0 || $date_diff9->format("%r%a") <= 0){
							echo '<br><span style="color:red;">Expired</span>';
							}
							else{
							echo '<br><span style="color:red;">'.$date_diff9->format("%r%a").' day/s to expire</span>';
							}
						}
						?>
						</li>
						<?php 
						$date_db10 = date_create($row2['shipstationlicense']);
						$date_diff10 = date_diff($date_now1,$date_db10);
						?>
						<li>SHIP STATION LICENSE:
						<?php 
						if($date_diff10->format("%r%a") <= 25){
							if ($date_diff10->format("%r%a") < 0 || $date_diff10->format("%r%a") <= 0){
							echo '<br><span style="color:red;">Expired</span>';
							}
							else{
							echo '<br><span style="color:red;">'.$date_diff10->format("%r%a").' day/s to expire</span>';
							}
						}
						?>
						</li>
						<?php 
						$date_db11 = date_create($row2['paip']);
						$date_diff11 = date_diff($date_now1,$date_db11);
						?>
						<li>PERSONNAL ACCIDENT INSURANCE POLICY:
						<?php 
						if($date_diff11->format("%r%a") <= 25){
							if ($date_diff11->format("%r%a") < 0 || $date_diff11->format("%r%a") <= 0){
							echo '<br><span style="color:red;">Expired</span>';
							}
							else{
							echo '<br><span style="color:red;">'.$date_diff11->format("%r%a").' day/s to expire</span>';
							}
						}
						?>
						</li>
					</ul>
				
				<?php
							}
						}
						else {
							echo "0 results";
						}
				?>
			</div>
       
 
  </div>
</div>
<?php
$conn->close();
?>
<div style="text-align:center;">Copyright © 2018 Philippine Coast Coastguard TABUELAN district </div><div style="text-align:center;">designed by Flexron Media Services</div></body>>
</html>