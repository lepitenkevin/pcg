<?php 
require('includes/dbcon.php');

$id = $_GET['id'];
$sql = "DELETE FROM ssen_tb WHERE id=$id";
if ($conn->query($sql) === TRUE) {			
	 
	header("location: ssen.php?pageno=1");
	echo 'success';
	
} else {
	echo "directory NOT deleted<br />";
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>