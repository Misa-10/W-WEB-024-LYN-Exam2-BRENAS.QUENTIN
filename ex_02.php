<?php

function min_len_array($array){
    
    
    $arrayKey=array_keys($array);

   $MinKey =min($arrayKey); // recup la plus petite key

  
   var_dump($array[$MinKey]);
   var_dump($array);
}
min_len_array(array("sdda"=>"1", "abaa"=>"2", "abaca"=>"3","b"=>"4"));