<?php
    $var1 = 1;
    $var2 = 5;

    // echo "The number ".$var1." is less than the number ".$var2.";

    if ($var1 < $var2) {
        $comparison = "less than";
        // echo "The number ".$var1." is less than the number".$var2;    
    }                 
    
    else if ($var2 < $var1) {
        $comparison = "greater than";
        // echo "The number ".$var2." is less than the number".$var1;
    }

    else {
        $comparison = "equal to";
        // echo "The two numbers are equal";    
    }

    echo "The number ".$var1." is ".$comparison." the number ".$var2;