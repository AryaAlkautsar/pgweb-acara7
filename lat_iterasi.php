<?php
    /*
    $i = 1;
    while ($i < 100) {
        echo $i;
        $i = $i + 1;
    }
    */

    /*
    for($i=1; $i<100; $i++) {
        echo $i. "<br";
    }
    */

    $colors = array("red" ,"green", "blue", "yellow");

    foreach ($colors  as $values) {
        echo "$values <br>";
    }

    for($i=0; $i<=3; $i++){
        echo $colors[$i]. "<br>";
    }
?>