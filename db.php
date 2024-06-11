<?php
$database = mysqli_connect("posts.back", "root", "root", "social");
$database->query("SET NAMES utf8");
(!$database) ? die("Connection failed" . mysqli_connect_error()) : "Connection passed";