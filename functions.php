<?php
    function getsum($num1, $num2) {
        $sum = $num1 + $num2;
        echo "The total of num1 and num2 is :$sum";
    }
    getsum(10, 20);

    echo "<br>";
    function getName($name) {
        echo "Hello $name, welcome to the world of the real";
    }
    getname("Kwendo");
?>