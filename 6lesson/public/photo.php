<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/../config/main.php";
require_once ENGINE_DIR . "gallery.php";
require_once ENGINE_DIR . "base.php";

$id = (int) get('id');

$image = getGalleryImageById($id);
incrementImageViews($id);
include VIEWS_DIR . 'photo.php';
?>