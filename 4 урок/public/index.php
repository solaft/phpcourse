<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "draw.php"; 
 
function getFiles(string $directory): array {
    return array_filter(
        scandir($directory),
        function($item) use ($directory) {
            return !is_dir($directory . "/" . $item);
        }
    );
}

$images = getFiles(IMG_DIR);

foreach ($images as $image) {
    $imgUrl = "/img/{$image}";
    echo "<a href='' target='_blank'>
    <img src='{$imgUrl}' width='300' height='300'>
    </a>";
}
