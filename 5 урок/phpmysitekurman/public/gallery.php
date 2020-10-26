<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "draw.php";
require_once ENGINE_DIR . "files.php";

$images = getFiles(IMG_DIR);

//include VIEWS_DIR . "gallery.php";

$config = [
    'host' => '127.0.0.1',
    'login' => 'root',
    'password' => 'root',
    'db' => 'php2020'
]; 

$connection = mysqli_connect (
$config['host'], 
$config['login'], 
$config['password'],
$config['db']
);
$sql = "SELECT * FROM images";
$result = mysqli_query($connection, $sql);
$images = mysqli_fetch_all($result, MYSQLI_ASSOC);

//var_dump($gallery);

//include VIEWS_DIR . "gallery.php";
