
<?php 
$a=0;
while($a++ < 100) if($a%3==0) echo "$a<br/>";

$i = 0;
do{
    if($i%2!=0)
    echo "$i- нечётное число<br/>";
    else if($i==0)
    echo "$i- ноль<br/>";
    else 
    echo "$i- чётное число<br/>";
    $i++;

 } while ($i <= 10);

$arraycity = [
    'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт']
];
foreach ($arraycity as $my_key => $my_value)
{
   echo $my_key . '<br>';
   for ($i = 0; $i < $arraycityLength = count($arraycity[$my_key]); $i++) {
       if ($i == $arraycityLength - 1) {
           echo $arraycity[$my_key][$i] . '.' . '<br>';
       } else {
           echo $arraycity[$my_key][$i] . ', ';
       }
   }
}

function replace($word) {
	echo str_replace(" ", "_", $word);
};
replace("фраза с пробелами");
?>
