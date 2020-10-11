<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true? (сравниваются не типы данных, а значения)
    var_dump((int)'012345');     // Почему 12345? int приводит к числам
    var_dump((float)123.0 === (int)123.0); // Почему false? здесь строгое сравнение, сравниваем и типы данных тоже
    var_dump((int)0 === (int)'hello, world'); // Почему true? потому что строка не 0

    $a = 5;
    $b = 10;
    
    $a = $b + $a; 
    $b = $a - $b; 
    $a = $a - $b; 
    
    echo $a;
    echo $b;
?>