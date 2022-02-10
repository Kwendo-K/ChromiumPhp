<?php
    $conn = mysqli_connect("localhost", "root", "", "chromium");

    #checking the database connection
    if($conn == true) {
        echo "Server connected successfully <br/>";
    }
    else {
        echo "Error connecting to the server! ".mysqli_connect_error($link);
    }
?>