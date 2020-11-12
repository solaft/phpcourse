<h1><?=$product['name']?></h1>
<p><?=$product['description']?></p>
<p><?=$product['price']?></p>

<?php foreach ($product['images'] as $image):?>
    <img width="200"  src="/img/small/<?=$image['path']?>" alt="">
<?php endforeach;?>
<form action="/add_to_basket.php" method="post">
<input type="hidden" value="<?=$product['id']?>" name="id">
<input type="number" value="0" name="qty">
<input type="submit" value="Добавить">
</form>