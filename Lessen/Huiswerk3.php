<?php
$hour = date('G');
if($hour >= 6 && $hour < 12){
    echo 'Goedemorgen';
} else if($hour >= 12 && $hour < 18){
    echo 'Goedemiddag';
} else {
    echo "Het zal wel avond zijn";
}