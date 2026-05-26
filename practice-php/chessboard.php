<?php

    $size = 6;
    for($x = 0; $x <= $size; $x++) {
        for($j = 0; $j <=$size; $j++) {
            if ($j % 2 == 0) {
                echo "_";
            } else {
                echo "=";
            }
        }
        echo "<br>";
    }
