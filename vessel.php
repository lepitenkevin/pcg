<?php
		require('includes/dbcon.php');
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
  <a class="nav-link" href="dashboard.php">DASHBOARD</a>
  <a class="nav-link active" href="ssen.php?pageno=1">SSEN</a>
  <a class="nav-link" href="vessel.php?pageno=1">VESSELS</a>
</nav>

<div class="btn-group">
    <a href="addvessel.php" class="btn btn-primary">
        <i class="fas fa-plus-circle"></i>
        <span><strong>Add New</strong></span>            
    </a>
</div>
<div class="btn-group">
    <a href="vessel.php?pageno=1" class="btn btn-primary">
        <i class="fas fa-th-list"></i>
        <span><strong>View List</strong></span>            
    </a>
</div>
<div class="btn-group" >
<!--
<input type="text" name="id" class="form-control input-sm" maxlength="64" placeholder="Application #" style="width=40%;"/>
 <button type="submit" class="btn btn-primary btn-sm fa fa-search"></button>
-->
</div>
<br>


<h1>Vessel Monitoring</h1>

  <div class="row" ">
	<div class="span5">
	<?php
	if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 3;
        }
		$no_of_records_per_page = 5;
        $offset = ($pageno-1) * $no_of_records_per_page;
		$total_pages_sql = "SELECT COUNT(*) FROM vessel_tb";
		$result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

			$sql = "SELECT * FROM vessel_tb Limit $offset, $no_of_records_per_page";
		
	
	?>
	
            <table class="table table-striped table-condensed" style="font-size: 14px;">
                  <thead>
                  <tr>
					<th>More Details</th>
             
                    <th>NAME OF VESSEL</th>
                    <th>GROSS TONNAGE </th>
                    <th>NET TONNAGE </th>
					<th>PASSENGER SHIP SAFETY CERTIFICATE/ CARGO SHIP SAFETY CERTIFICATE</th>
					<th>CERTIFICATE OF PUBLIC CONVENIENCE/SPECIAL PERMIT</th>				
					<th>MINIMUM SAFE MANNING CERTIFICATE</th>
					<th>LOAD LINE CERTIFICATE</th>
					<th>COASTWISE LICENSE</th>
					<th>DOCUMENT OF COMPLIANCE</th>
					<th>CERTIFICATE OF COMPLIANCE</th>
					<th>SAFETY MANAGEMENT CERTIFICATE</th>
					<th>CERTIFICATE OF STABILTY</th>
					<th>SHIP STATION LICENSE</th>
					<th>PERSONNAL ACCIDENT INSURANCE POLICY</th>
					<th>CAPACITY</th>
                  </tr>
              </thead>   
              <tbody>
                
				<?php
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
				?>
				<tr>
					<td><a href="vessel-view.php?id=<?php echo $row['id'];?>">View/Edit</a></td>
         
                    <td><?php echo $row['nameofvessel'];?></td>
                    <td><?php echo $row['grosstonnage'];?></td>
                    <td><?php echo $row['nettonnage'];?></td>  
					
					<?php 
					$date_now = date_create(date('Y-m-d'));
					$date_db = date_create($row['pssccssc']);
					$date_diff = date_diff($date_now,$date_db);
					echo '<td>'.$row['pssccssc'].'<br>';
					if($date_diff->format("%r%a") <= 25){
							if ($date_diff->format("%r%a") < 0 || $date_diff->format("%r%a") <= 0){
							echo '<span style="color:red;">Expired</span>';
							}
							else{
							echo '<span style="color:red;">'.$date_diff->format("%r%a").' day/s to expire</span>';
							}
						}
					echo '</td>';
					?>
					<?php 
					$date_now = date_create(date('Y-m-d'));
					$date_db = date_create($row['copcspecialpermit']);
					$date_diff = date_diff($date_now,$date_db);
					echo '<td>'.$row['copcspecialpermit'].'<br>';
					if($date_diff->format("%r%a") <= 25){
							if ($date_diff->format("%r%a") < 0 || $date_diff->format("%r%a") <= 0){
							echo '<span style="color:red;">Expired</span>';
							}
							else{
							echo '<span style="color:red;">'.$date_diff->format("%r%a").' day/s to expire</span>';
							}
						}
					echo '</td>';
					?>
					<?php 
					$date_now = date_create(date('Y-m-d'));
					$date_db = date_create($row['msmc']);
					$date_diff = date_diff($date_now,$date_db);
					echo '<td>'.$row['msmc'].'<br>';
					if($date_diff->format("%r%a") <= 25){
							if ($date_diff->format("%r%a") < 0 || $date_diff->format("%r%a") <= 0){
							echo '<span style="color:red;">Expired</span>';
							}
							else{
							echo '<span style="color:red;">'.$date_diff->format("%r%a").' day/s to expire</span>';
							}
						}
					echo '</td>';
					?>
					<?php 
					$date_now = date_create(date('Y-m-d'));
					$date_db = date_create($row['loadlinecertificate']);
					$date_diff = date_diff($date_now,$date_db);
					echo '<td>'.$row['loadlinecertificate'].'<br>';
					if($date_diff->format("%r%a") <= 25){
							if ($date_diff->format("%r%a") < 0 || $date_diff->format("%r%a") <= 0){
							echo '<span style="color:red;">Expired</span>';
							}
							else{
							echo '<span style="color:red;">'.$date_diff->format("%r%a").' day/s to expire</span>';
							}
						}
					echo '</td>';
					?>
					<?php 
					$date_now = date_create(date('Y-m-d'));
					$date_db = date_create($row['coastwiselicense']);
					$date_diff = date_diff($date_now,$date_db);
					echo '<td>'.$row['coastwiselicense'].'<br>';
					if($date_diff->format("%r%a") <= 25){
							if ($date_diff->format("%r%a") < 0 || $date_diff->format("%r%a") <= 0){
							echo '<span style="color:red;">Expired</span>';
							}
							else{
							echo '<span style="color:red;">'.$date_diff->format("%r%a").' day/s to expire</span>';
							}
						}
					echo '</td>';
					?>
					<?php 
					$date_now = date_create(date('Y-m-d'));
					$date_db = date_create($row['docofcompliance']);
					$date_diff = date_diff($date_now,$date_db);
					echo '<td>'.$row['docofcompliance'].'<br>';
					if($date_diff->format("%r%a") <= 25){
							if ($date_diff->format("%r%a") < 0 || $date_diff->format("%r%a") <= 0){
							echo '<span style="color:red;">Expired</span>';
							}
							else{
							echo '<span style="color:red;">'.$date_diff->format("%r%a").' day/s to expire</span>';
							}
						}
					echo '</td>';
					?>
				
					<?php 
					$date_now = date_create(date('Y-m-d'));
					$date_db = date_create($row['certofcompliance']);
					$date_diff = date_diff($date_now,$date_db);
					echo '<td>'.$row['certofcompliance'].'<br>';
					if($date_diff->format("%r%a") <= 25){
							if ($date_diff->format("%r%a") < 0 || $date_diff->format("%r%a") <= 0){
							echo '<span style="color:red;">Expired</span>';
							}
							else{
							echo '<span style="color:red;">'.$date_diff->format("%r%a").' day/s to expire</span>';
							}
						}
					echo '</td>';
					?>
					<?php 
					$date_now = date_create(date('Y-m-d'));
					$date_db = date_create($row['safetymancertificate']);
					$date_diff = date_diff($date_now,$date_db);
					echo '<td>'.$row['safetymancertificate'].'<br>';
					if($date_diff->format("%r%a") <= 25){
							if ($date_diff->format("%r%a") < 0 || $date_diff->format("%r%a") <= 0){
							echo '<span style="color:red;">Expired</span>';
							}
							else{
							echo '<span style="color:red;">'.$date_diff->format("%r%a").' day/s to expire</span>';
							}
						}
					echo '</td>';
					?>
					<?php 
					$date_now = date_create(date('Y-m-d'));
					$date_db = date_create($row['certofstability']);
					$date_diff = date_diff($date_now,$date_db);
					echo '<td>'.$row['certofstability'].'<br>';
					if($date_diff->format("%r%a") <= 25){
							if ($date_diff->format("%r%a") < 0 || $date_diff->format("%r%a") <= 0){
							echo '<span style="color:red;">Expired</span>';
							}
							else{
							echo '<span style="color:red;">'.$date_diff->format("%r%a").' day/s to expire</span>';
							}
						}
					echo '</td>';
					?>
					<?php 
					$date_now = date_create(date('Y-m-d'));
					$date_db = date_create($row['shipstationlicense']);
					$date_diff = date_diff($date_now,$date_db);
					echo '<td>'.$row['shipstationlicense'].'<br>';
					if($date_diff->format("%r%a") <= 25){
							if ($date_diff->format("%r%a") < 0 || $date_diff->format("%r%a") <= 0){
							echo '<span style="color:red;">Expired</span>';
							}
							else{
							echo '<span style="color:red;">'.$date_diff->format("%r%a").' day/s to expire</span>';
							}
						}
					echo '</td>';
					?>
					<?php 
					$date_now = date_create(date('Y-m-d'));
					$date_db = date_create($row['paip']);
					$date_diff = date_diff($date_now,$date_db);
					echo '<td>'.$row['paip'].'<br>';
					if($date_diff->format("%r%a") <= 25){
							if ($date_diff->format("%r%a") < 0 || $date_diff->format("%r%a") <= 0){
							echo '<span style="color:red;">Expired</span>';
							}
							else{
							echo '<span style="color:red;">'.$date_diff->format("%r%a").' day/s to expire</span>';
							}
						}
					echo '</td>';
					?>
			
					<td><?php echo $row['capacity'];?></td> 
				 </tr>
					<?php	
					} 
				}
				else {
					echo "0 results";
				}
		
				$conn->close();
				?>
               
                                                 
              </tbody>
            </table>
			<div class="pagination" style="backgroud-color: rgba(0,0,0,.05) !important;">
				<ul class="pagination">
					<li><a href="?pageno=1">First</a></li>
					<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
						<a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
					</li>
					<li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
						<a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
					</li>
					<li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
				</ul>
			</div>
            </div>
 
  </div>
</div>
<div style="text-align:center;">Copyright © 2018 Philippine Coast Coastguard TABUELAN district </div><div style="text-align:center;">designed by Flexron Media Services</div></body>>
</html>