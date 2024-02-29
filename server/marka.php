<?php 
require_once "db.php";
$sql="SELECT marka FROM cikkek GROUP BY marka ORDER BY marka";
$stmt =$db->query($sql);
echo json_encode($stmt->fetchAll());

?>