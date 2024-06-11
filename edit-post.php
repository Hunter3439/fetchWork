<?php
require_once ("db.php");

$incomin_json = file_get_contents("php://input");
$assoc_array = json_decode($incomin_json, true);
$post_id = $_GET["id"];

$sql = 'UPDATE `posts` SET `posts`.`name` = "'.$assoc_array["name"].'", `posts`.`description` = "'.$assoc_array["description"].'" WHERE `posts`.`id` = '.$post_id.'';
$database->query($sql);

echo true;
exit;
?>