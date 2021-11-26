<?php

function rev_epur_str($string=NULL) {
    
    if (isset($string)==false){
        
        return False;
    }
    else{
        
        
        
        $string2=trim($string);
        $string3=preg_replace('/\s+/', " ", $string2);

        $string = explode(" ", $string3);
        $rarray = array_reverse($string);
        $newstring = implode(" ", $rarray);


return $newstring;

        
        
    }
    
}
