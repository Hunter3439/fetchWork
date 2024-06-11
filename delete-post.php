<?php
require_once ("db.php");

$post_id = $_GET["id"];


$sql = 'DELETE FROM `social`.`posts` WHERE `id` = '.$post_id.'';
$database->query($sql);
$database->close(); 
echo '{"result": true}';
exit;
?>