<?php
function fibo($totalNumbers){
    $first = 1; $second = 1; $temp = 0;
    echo $first . "<br>" . $second . "<br>";
    for($i = 0; $i < ($totalNumbers - 2); $i++){
        echo $first + $second . "<br>";
        $temp = $second;
        $second += $first;
        $first = $temp;
        $temp = 0;
    }
}
