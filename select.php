<?php
    include "connect.php";

    #query
    $sql = "SELECT * FROM `details` WHERE id = 1";
    #executing the sql query
    $result = mysqli_query($link, $sql);
    #checking
    if ($result) {
        $data = mysqli_num_rows($result);
        #checking the data in the database
        if ($data > 0) {
            echo "<h4>Data</h4>";
            $row = mysqli_fetch_array($result);
            echo $id = $row['id'];
            echo $firstName = $row['firstName'];
            echo $surName = $row['surName'];
            echo $emailAddress = $row['emailAddress'];
            echo $phone = $row['phone'];
        }
        else {
            echo "No records found in the database";
        }
    }
?>