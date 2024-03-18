<?php
include("database.php");
if($_REQUEST['empid']) {
	$sql = "SELECT id, display,prozessor, `name`
	FROM `modell`
	WHERE id='".$_REQUEST['empid']."'";
	$resultSet = mysqli_query($conn, $sql);	
	$empData = array();
	while( $emp = mysqli_fetch_assoc($resultSet) ) {
		$empData = $emp;
	}
	echo json_encode($empData);
} else {
	echo 0;	
}
$conn->close();
?>