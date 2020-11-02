<style> </style>
<a href="/">Каталог</a>
<table>
<?php foreach ($basket as $item): ?>
<tr>
<td>
<?= $item['product']['name'] ?>
</td>
<td>
<?= $item['qty'] ?>
</td>
</tr>
<?php endforeach; ?>
</table>