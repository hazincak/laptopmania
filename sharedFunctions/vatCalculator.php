<?php
$excludedVat = 0.80;
function vatCalculator($excludedVat, float $price){
    $priceResult = $price * $excludedVat;
    return number_format((float)$priceResult, 2, '.', '');
}
?>