<?php 
require_once "db.php";
$id = $_GET['id'];
$sql = "SELECT * FROM cikkek WHERE id='{$id}'";
$stmt = $db->query($sql);
echo json_encode($stmt->fetchAll());
?>
