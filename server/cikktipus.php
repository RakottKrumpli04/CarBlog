<?php 
require_once "db.php";
$sql="SELECT cikktipus FROM cikkek GROUP BY cikktipus ORDER BY cikktipus";
$stmt =$db->query($sql);
echo json_encode($stmt->fetchAll());

?>