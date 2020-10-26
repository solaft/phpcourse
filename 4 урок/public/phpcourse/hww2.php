<?php
$a = 5;
$b = 6;
if ($a>0 && $b>0)
    echo $a-$b;
    else if ($a<0 && $b<0)
    echo $a*$b;
    else if ($a<0 && $b>0 || $a>0 && $b<0)
    echo $a+$b;

    function average1($x, $y)
    {
       return ($x + $y);
       return ($x * $y);
       return ($x / $y);
       return ($x - $y);
    }
    $avg1 = average1(42, 10);
    echo $avg1;
    function average2($x, $y)
    {
       
       return ($x * $y);
       
    }
    $avg2 = average2(42, 10);
    echo $avg2;
    function average3($x, $y)
    {
      
       return ($x / $y);
       
    }
    $avg3 = average3(42, 10);
    echo $avg3;
    function average4($x, $y)
    {
       return ($x - $y);
    }
    $avg4 = average4(42, 10);
    echo $avg4;

    function mathOperation($arg1, $arg2, $operation){
        $f=0;
        switch($operation) {
            case '1':
            $f=average1($arg1, $arg2);
            break;
            case '2':
            $f=average2($arg1, $arg2);
            break;
        }
        return $f;
    }
    $k = mathOperation(17, 22, '1');
    echo $k;
    $l = mathOperation(17, 22, '2');
    echo $l;

    /*if(i>=4)
      echo "<p>Отображение текущего времени: " . date('H"часов":i"минуты') . "</p>";
      else if (H>22)
      echo "<p>Отображение текущего времени: " . date('H"часа":i"минуты') . "</p>";*/
?>
    <h1>Title 1</h1>
<p>content</p>
<?php 
echo date('Y');
 