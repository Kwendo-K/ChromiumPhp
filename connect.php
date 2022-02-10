<?php
    
    $link = mysqli_connect("localhost", "root", "", "chromium");

    #checking database connection
    if ($link == true) {
        echo "server connected successfully<br/>";
    }
    else {
        echo "Error connecting to server".mysqli_connect_error($link);
    }
?>