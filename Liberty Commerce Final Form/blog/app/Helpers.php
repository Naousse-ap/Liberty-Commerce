<?php

function getprice($price)
{
    $price =($price);

    return number_format($price, 2, ',', '') .'€';
}