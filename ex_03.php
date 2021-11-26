<?php




function resum_join_str($S1  = NULL, $S2 = NULL){
    
    
    if (!is_string($S1) || (!is_string($S2))) {
        
        return false;
        
    } else {
        
        if (strlen($S1) >= 14) {
            
            $S1 = substr($S1, 0, 14);
            
        } else {
            
            $str = strlen($S1);
            
            for ($a = $str; $a < 14; $a++) {
                
                $S1.= ".";
                
            }
        }
        if (strlen($S2) >= 3) {
            
            $S2 = substr($S2, -3);
            
        } else {
            
            $str2 = strlen($S2);
            
            for ($a = $str2; $a < 3; $a++) {
                
                $S2 .= ".";
            }
        }
    }
    return $S1 . $S2;
}