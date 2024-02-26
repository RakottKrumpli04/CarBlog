<?php 
require_once "db.php";
$sql="SELECT cim, roviden, kep FROM autok order BY rand() limit 9   ;";
$stmt =$db->query($sql);
echo json_encode($stmt->fetchAll());

?>

