<?php
require "database.php";


$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM pasakumi";
$params = [];
$pasakumi = $db
          ->execute($query, $params)
          ->fetchAll();
require "views/index.view.php";