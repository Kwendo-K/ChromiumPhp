<?php
    echo "indexed arrays <br>";
    $people = array("kevin", "kwanzu", "james", "kwendo");
    print_r($people);


    foreach($people as $p) {
        echo "$p \n";
        echo "<br>";
    }

    #sorting arrays in ascending order
    sort($people);
    print_r($people);
?>