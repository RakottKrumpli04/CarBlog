<?php 
require_once "db.php";
extract($_GET);
if($marka=="0" && $cikktipus=="0"){
    $sql = "SELECT id, cim, roviden, kep FROM cikkek ORDER BY rand()";
}
else if($marka=="0" && $cikktipus!="0"){
    $sql = "SELECT id, cim, roviden, kep FROM cikkek WHERE cikktipus='{$cikktipus}'";
}
else if($marka!="0" && $cikktipus=="0"){
    $sql = "SELECT id, cim, roviden, kep FROM cikkek WHERE marka='{$marka}'";
}
else{
    $sql = "SELECT id, cim, roviden, kep FROM cikkek WHERE marka='{$marka}' AND cikktipus='{$cikktipus}'";
}
$stmt =$db->query($sql);
echo json_encode($stmt->fetchAll());

?>