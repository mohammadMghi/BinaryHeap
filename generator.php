<?php
include "BinaryHeap.php";
$heap = new BinaryHeap();

for ($i=0; $i <1000 ; $i++) { 
    $heap->insert(mt_rand(0, 1000));
}


$rand = substr(md5(microtime()),rand(0,26),5);

$passArray = array();

$i=0;
while (!$heap->isEmpty()) {
    $passArray[$i] = $heap->extract() .$rand ;
    $i++;
}

foreach ($passArray as $pass)
    echo $pass;
 

 

