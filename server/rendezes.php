<?php
require_once "db.php";

$rendezes = isset($_POST['rendezes']) ? $_POST['rendezes'] : null;
$szures = isset($_POST['szures']) ? $_POST['szures'] : null;
$sql = "SELECT id, cim, roviden, kep FROM autok WHERE ";

switch ($szures) {
    case 'Ford':
        $sql .= "marka = 'Ford'";
        break;
    case 'AstonMartin':
        $sql .= "marka = 'AstonMartin'";
        break;
    case 'Subaru':
        $sql .= "marka = 'Subaru'";
        break;
    case 'auto':
        $sql .= "fajta = 'auto'";
        break;
    case 'ismerteto':
        $sql .= "fajta = 'ismerteto'";
        break;
    case 'tortenet':
        $sql .= "fajta = 'tortenet'";
        break;
    default:
        $sql .= "1";
        break;
}

$sql .= " ORDER BY ";

switch ($rendezes) {
    case 'marka':
        $sql .= "marka";
        break;
    case 'fajta':
        $sql .= "fajta";
        break;
    default:
        $sql .= "rand()";
        break;
}

$stmt = $db->query($sql);
echo json_encode($stmt->fetchAll());
?>
