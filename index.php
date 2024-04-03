<?php

// require "functions.php";

// dd($_SERVER["REQUEST_URI"]);
$url_array = parse_url($_SERVER["REQUEST_URI"]);
$url = $url_array["path"];

// dd(parse_url($_SERVER["REQUEST_URI"]));

if($url == "/")
{
    require "controllers/index.php";
}
else if($url == "/kolektivi")
{
    require "controllers/kolektivi.php";
}
else if($url == "/add")
{
    require "controllers/add.php";
}
else if($url == "/delete")
{
    require "controllers/delete.php";
}
else if($url == "/edit")
{
    require "controllers/edit.php";
}
else if($url == "/add-kolektivi")
{
    require "controllers/add-kolektivi.php";
}
else if($url == "/login")
{
    require "controllers/login.php";
}
else if($url == "/deleteKolektiv")
{
    require "controllers/kolektivi-delete.php";
}
else if($url == "/show")
{
    require "controllers/show.php";
}

else if($url == "/shows")
{
    require "controllers/show-kolektivi.php";
}

else
{
    require "controllers/index.php";
}

// echo "Page not found :(";

?>