<?php 
require_once "db.php";
$sql="SELECT id, cim, roviden, borito FROM cikkek ORDER BY rand() limit 3";
$stmt = $db->query($sql);
echo json_encode($stmt->fetchAll());
?>

