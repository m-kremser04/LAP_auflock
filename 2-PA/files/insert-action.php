<?php
include('database_pdo.php');


if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['modell'])) {
    $conn = getConnection();
		$hersteller = $_POST['hersteller'];
		$modell = $_POST['modell'];
		$display = $_POST['display'];
		$prozessor = $_POST['prozessor'];
	$sql = "insert into modell (name, display, prozessor,hersteller_id) values (:name, :display, :prozessor, :herstell_id)";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':name',$modell);
		$stmt->bindParam(':display',$display );
		$stmt->bindParam(':prozessor',$prozessor );
		$stmt->bindParam(':herstell_id',$_POST['hersteller'] );
		$stmt->execute();
    $stmt = $conn->prepare("SELECT LAST_INSERT_ID()");
    $stmt->execute();
    $last_id = $stmt->fetchColumn();

    header('Location: insert.php');






}

?>