<?php
    $gira = true;
    //ciclo while
    while ($gira){
        echo "oggi mi girano :) \n";

        if (rand(1,100) > 95){
            $gira = false;
            echo "non girano più!!!!!";
        }
    }
?>