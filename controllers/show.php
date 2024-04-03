<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);

$query = "SELECT * FROM ckc_events WHERE id = :id";
$params = [":id" => $_GET["id"]];

$event = $db->execute($query, $params)->fetch();


require "views/show.view.php";