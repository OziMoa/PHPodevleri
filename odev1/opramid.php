<?php 


function triangle($o){
    $i = 0;
    while($i < $o){
        for ($j = 0; $j < $i; $j++){
            echo "o ";
        }
        echo "<br>";
        $i++;
    }
}

triangle(15);


?>