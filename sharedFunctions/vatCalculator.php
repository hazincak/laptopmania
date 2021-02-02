<?php

function vatCalculator(float $price){
    $excludedVat = 0.80;
    $priceResult = $price * $excludedVat;
    return number_format((float)$priceResult, 2, '.', '');
}
?>