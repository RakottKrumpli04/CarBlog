<?php 
require_once "db.php";
$sql="SELECT id, cim, roviden, borito FROM cikkek ORDER BY rand()";
$stmt = $db->query($sql);
echo json_encode($stmt->fetchAll());
?>

