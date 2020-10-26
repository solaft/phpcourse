<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php"; 
require_once ENGINE_DIR . "draw.php"; 
function getFiles(string $directory): array 
{ return array_filter( scandir($directory), function($item) use ($directory) 
    { return !is_dir($directory . "/" . $item); } ); } 
    $images = getFiles(IMG_DIR); 
    foreach ($images as $image) { $imgUrl = "/img/{$image}"; 
    echo "<a href='' target='_blank'> <img src='{$imgUrl}' width='300' height='300'> </a>"; 
}
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";

$host = '127.0.0.1';
$login = 'root';
$password = 'root';
$db = 'php2020';

$connection = mysqli_connect($host, $login, $password, $db);
$id = mysqli_escape_string($connection, $_GET['id']);

$sql = "SELECT * FROM images";

$res = mysqli_query($connection, $sql);
$product = mysqli_fetch_all($res, MYSQLI_ASSOC)[0];


while ($row = mysqli_fetch_assoc($res)) {
    var_dump($row);
}

$id = mysqli_insert_id($connection);

