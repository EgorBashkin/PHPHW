<?php

    $a = 0;

    do{
            if($a == 0){
                echo "$a" . '- это ноль <br />';
                $a++;
            }
            else if ($a % 2 != 0){
                echo "$a" . ' - нечетное число<br />';
                $a++;
            }
                
             else if ($a % 2 == 0){
                echo "$a" . ' - четное число<br />';
                $a++;
             }
            
    
    } while ($a<=10)


    ?>
