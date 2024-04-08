<?php
require "Database.php";
$config = require "config.php";
require "Validator.php";
$db = new Database($config);


if(!Validator::string($_POST["datetime"], min: 1, max:500) && isset($_GET["event"]) && isset($_GET["place"]))
{
    $query = "UPDATE ckc_events
    SET datetime = :datetime, event = :event, place = :place
    WHERE id = :id;";
    $params = [
    ':datetime' => $_POST['datetime'], ///chats palidzeja lol
    ':event' => $_POST['event'],
    ':place' => $_POST['place'],
    ':id' => $_POST['id']
    ];
    $db = new Database($config);
    $events = $db->execute($query, $params)->fetchALL(); 
    header('Location: '. "/");
}
else if(isset($_GET["id"]))
{
    $query = "SELECT * FROM ckc_events WHERE id = $_GET[id];";
    $params = [];
    $db = new Database($config);
    $events = $db->execute($query, $params)->fetchALL();
}
else
{
    $query = "SELECT * FROM ckc_events"; 
    $params = [];
    $db = new Database($config);
    $events = $db->execute($query, $params)->fetchALL();
}


require "views/edit.view.php";

<?php 
require "Validator.php";
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $errors = [];

    if (!Validator::string($_POST["event"], min: 1, max: 255)) {
        $errors["title"] = "title cannot be empty or too long";
    }if{
        !Validator::string($_POST["place"], min: 1, max: 255)) {
            $errors["title"] = "title cannot be empty or too long";
    }

    if (!Validator::number($_POST["datetime"], min:1,max:3)){
        $errors["category-id"] = "category id invalid";
    }
    if (empty($errors)) {
        $query = "UPDATE posts
        SET title = :title, category_id = :category_id
        WHERE id = :id";
        $params = [
        ":title" => $_POST["title"],
        ":category_id" => $_POST["category-id"],
        ":id" => $_POST["id"]
    ];
   
        $db->execute($query, $params);
        header('location: /');
        die();

 }
}
$query = "SELECT * FROM posts WHERE id = :id";
$params = [":id" => $_GET["id"]];

$post = $db->execute($query, $params)->fetch();


require "views/posts/edit.view.php";

