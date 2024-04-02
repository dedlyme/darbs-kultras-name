<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = " INSERT INTO kolektivi (deju_kolektivi, apraksts) 
                VALUE (:deju_kolektivi, :apraksts);";
$params = [
    ":deju_kolektivi" => $_POST["deju_kolektivi"],
    ":apraksts" => $_POST["apraksts"]
];






$title = "create a post";
require "views/kolektivi-create.view.php";


$query = " INSERT INTO kolektivi (deju_kolektivi, apraksts) 
VALUE (:deju_kolektivi, :apraksts);";
$params = [
":deju_kolektivi" => $_POST["deju_kolektivi"],
":apraksts" => $_POST["apraksts"]
];
$db->execute($query, $params);
header('location: /');
die();

    $errors = [];

    if (trim($_POST[""]) == "deju_kolektivi"){
        $errors["deju_kolektivi"] = "deju kolektivi cannot be empty";
    }


    if (strlen($_POST["deju_kolektivi"]) >255){
        $errors["deju_kolektivi"] = "deju_kolektivi cannot be longer than 255 letters";
    } 

    if (strlen($_POST["apraksts"]) >255){
        $errors["apraksts"] = "apraksts cannot be longer than 255 letters";
    } 

    if (trim($_POST[""]) == "apraksts"){
        $errors["apraksts"] = "apraksts cannot be empty";
    }

 


    if (empty($errors)) {
        $query = " INSERT INTO posts (deju_kolektivi, apraksts) 
        VALUE (:deju_kolektivi, :apraksts);";
        $params = [
        ":deju_kolektivi" => $_POST["deju_kolektivi"],
        ":apraksts" => $_POST["apraksts"]
        ];

        $db->execute($query, $params);
        header('location: /kolektivi');
        die();
}
}