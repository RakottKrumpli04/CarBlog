<?php 
require_once "db.php";
$sql="SELECT cim, roviden, kep FROM cikkek order BY rand()";
$stmt =$db->query($sql);
echo json_encode($stmt->fetchAll());

?>

