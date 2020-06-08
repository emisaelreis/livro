<?php

echo 'a) ';
if(100.00-100)
    echo 'true';
else
    echo 'false';
echo '<br><br>';

echo 'b) ';
if("zero")
    echo 'true';
else
    echo 'false';
echo '<br><br>';

echo 'c) ';
if("false")
    echo 'true';
else
    echo 'false';
echo '<br><br>';

echo 'd) ';
if(0 + true)
    echo 'true';
else
    echo 'false';
echo '<br><br>';

echo 'e) ';
if(0.000)
    echo 'true';
else
    echo 'false';
echo '<br><br>';

echo 'f) ';
if("0.0")
    echo 'true';
else
    echo 'false';
echo '<br><br>';

echo 'g) ';
$c = strcmp("salmo","false");
if($c){
    echo 'true ' . $c ;
} else {
    echo 'false ' . $c ;
}
echo '<br><br>';

echo 'h) ';
$t = 7 <=> 2;
if($t)
    echo 'true ' . $t;
else
    echo 'false ' . $t;
echo '<br><br>';