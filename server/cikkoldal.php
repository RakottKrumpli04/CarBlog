<?php 
require_once "db.php";
extract($_GET);
$id = 7;
$sql = "SELECT * FROM cikkek WHERE id=$id";
$stmt = $db->query($sql);
echo json_encode($stmt->fetchAll());
?>
