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


<h1>SSEN Search</h1>

  <div class="row">
  <form enctype="multipart/form-data" action="ssen-search.php" class="app-view"  id="myForm" method="GET" style="width:100%;">
	 Search By: <select name="searchby">
    <option value="CRapplicantno">Applicant #</option>
    <option value="CRnameofvessel">Name of Vessel</option>
    <option value="CRshipnumber">Ship #</option>
    <option value="id">ID</option>
  </select>
  <input type="input" name="searchstr" >
  <input type="submit" value="Search">
  </form>
	<div class="span5">
	<?php
	@$searchby = $_GET['searchby'];
	@$searchstr = $_GET['searchstr']; 
	$sql = "SELECT * FROM ssen_tb where $searchby = '$searchstr'";
	
	$result = $conn->query($sql);
	
	$value = @mysqli_fetch_object($result);
	?>
	
	 <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
					<th>More Details</th>
					<th>ID</th>
                    <th>Owner's Name</th>
					<th>Applicant #</th>		
					<th>Ship number</th>
					<th>Name of Vessel</th>
					<th>Expiratioon date</th>
					<th>Notice</th>
                  </tr>
              </thead>   
              <tbody>
	<?php
	if(@$value->id == TRUE){
		?>
		<tr>
					<td><a href="ssen-view.php?id=<?php echo $value->id;?>">View/Edit</a></td>
					<td><?php echo $value->id;?></td>
                    <td><?php echo $value->name;?></td>
					<td><?php echo $value->CRapplicantno;?></td>
					<td><?php echo $value->CRshipnumber;?></td>  
					<td><?php echo $value->CRnameofvessel;?></td>
					<td><?php echo $value->CRexpirationdate;?></td> 
					<?php
					$date_now = date_create(date('Y-m-d'));
					$date_db = date_create($value->CRexpirationdate);
					$date_diff = date_diff($date_now,$date_db);
					if($date_diff->format("%r%a") <= 25){
					?>
					
					<?php 
							if ($date_diff->format("%r%a") < 0 || $date_diff->format("%r%a") <= 0){
								echo '<td style="color: red;">Expired</td></tr>';
							}
							else{
								echo '<td style="color: red;">'.$date_diff->d.' day/s to expire</td></tr>';
							}
					}
					?>
				 </tr>
		<?php
	}
	else{
		echo 'empty';
	}	
	?>
	
           
                
				
				
			
               
                                                 
              </tbody>
            </table>
		
     </div>
 
  </div>
</div>
<div style="text-align:center;">Copyright © 2018 Philippine Coast Coastguard TABUELAN district </div><div style="text-align:center;">designed by Flexron Media Services</div></body>>
</html>