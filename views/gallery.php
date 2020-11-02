<?php
foreach ($images as $image) :
    $imgUrl = "/img/{$image['path']}";
?>
    <a href="/photo.php?id=<?=$image['id']?>">
            <img src="<?=$imgUrl?>" width='200'>
    </a>
<?php endforeach;?>