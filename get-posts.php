<?php
require_once ("db.php");

$sql = 'SELECT * FROM `social`.`posts`';
$query = $database->query($sql);
$arr = [];
while ($row = $query->fetch_assoc()) {
    $arr[] = $row;
}
$query->close();

echo json_encode($arr, JSON_UNESCAPED_UNICODE);
exit;
?>