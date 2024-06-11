<?php
require_once ("db.php");

$incomin_json = file_get_contents("php://input");
$assoc_array = json_decode($incomin_json, true);

$sql = 'INSERT INTO `social`.`posts`(`id`,`name`,`description`) VALUE (DEFAULT, "' . $assoc_array["name"] . '", "' . $assoc_array["description"] . '")';
$database->query($sql);
echo true;
exit;
?>