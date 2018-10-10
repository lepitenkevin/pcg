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
    <a href="ssen-addnew.php" class="btn btn-primary">
        <i class="fas fa-plus-circle"></i>
        <span><strong>Add New</strong></span>            
    </a>
</div>
<div class="btn-group">
    <a href="ssen.php?pageno=1" class="btn btn-primary">
        <i class="fas fa-th-list"></i>
        <span><strong>View List</strong></span>            
    </a>
</div>
<div class="btn-group" >
<a href="ssen-search.php" class="btn btn-primary">
        <i class="fa fa-search"></i>
        <span><strong>Search</strong></span>            
    </a>


</div>
<br>


<h1>SSEN Page</h1>

  <div class="row">
	<div class="span5">
	<?php
	if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 3;
        }
		$no_of_records_per_page = 5;
        $offset = ($pageno-1) * $no_of_records_per_page;
		$total_pages_sql = "SELECT COUNT(*) FROM ssen_tb";
		$result = mysqli_query($conn,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

			$sql = "SELECT * FROM ssen_tb Limit $offset, $no_of_records_per_page";
		
	
	?>
	
            <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
					<th>More Details</th>
					<th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Sex</th>
					<th>Applicant #</th>		
					<th>Certificate Vessel Registry</th>
					<th>MaterialHull</th>
					<th>Certificate Expiration Date</th>
					<th>Name of Vessel</th>
					<th>Expiratioon date</th>
                  </tr>
              </thead>   
              <tbody>
                
				<?php
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
				?>
				<tr>
					<td><a href="ssen-view.php?id=<?php echo $row['id'];?>">View/Edit</a></td>
					<td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['age'];?></td>
                    <td><?php echo $row['sex'];?></td>  
					<td><?php echo $row['CRapplicantno'];?></td>
					<td><?php echo $row['certificatevesselregistry'];?></td>  
					<td><?php echo $row['materialhull'];?></td>  
					<td><?php echo $row['certificateexpirationdate'];?></td>  
					<td><?php echo $row['CRnameofvessel'];?></td>
					<td><?php echo $row['CRexpirationdate'];
					$date_now = date_create(date('Y-m-d'));
					$date_db = date_create($row['CRexpirationdate']);
					$date_diff = date_diff($date_now,$date_db);
				
					if($date_diff->format("%r%a") <= 25){
							if ($date_diff->format("%r%a") < 0 || $date_diff->format("%r%a") <= 0){
							echo '<br><span style="color:red;">Expired</span>';
							}
							else{
							echo '<br><span style="color:red;">'.$date_diff->format("%r%a").' day/s to expire</span>';
							}
						}
			
					
					
					?></td> 
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