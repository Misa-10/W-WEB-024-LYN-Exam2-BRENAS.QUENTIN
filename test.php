<?php

$data = array('sdda'=>"1", 'abaa'=>"2", 'abaca'=>"3","a"=>"4","b"=>"5");


$arrayKey=array_keys($data);
$test=min($arrayKey);
var_dump($test);
var_dump($data[$test]);