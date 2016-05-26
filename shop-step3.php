<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$outp = '[ {"name":"Велосипед 16 PRIDE KELLY 2014","icon":"SKD-16-57-1000x1000.JPG", "desc":"Улюблений багатьма малюками PRIDE KELLY тепер в новому, ще більш яскравому та цікавому дизайні!", "price":225},'.
          '{"name":"Велосипед 29 Cannondale Trail 4 2015","icon":"SKD-07-91-1000x1000.JPG", "desc":"Cannondale Trail 4 призначений для аматорських змагань, катання по місту і по пересіченій місцевості.", "price":450},'.
          '{"name":"Велосипед 20 ELECTRA Tiger Shark 1","icon":"SKD-07-91-1000x1000.JPG", "desc":"Шикарний дитячий круизер на широких покришках.", "price":200} ]';

echo($outp);
?>

