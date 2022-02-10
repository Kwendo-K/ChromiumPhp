<?php
    include "connect.php";

    #query
    $sql = "SELECT * FROM `details`";
    #executing the sql query
    $result = mysqli_query($link, $sql);
    #checking
    if ($result) {
        $data = mysqli_num_rows($result);
        #checking the data in the database
        if ($data > 0) {
            echo "<h4>Data</h4>";
            while($row = mysqli_fetch_array($result)) {
                echo " ". $id = $row['id'];
                echo " ". $firstName = $row['firstName'];
                echo " ". $surName = $row['surName'];
                echo " ". $emailAddress = $row['emailAddress'];
                echo " ". $phone = $row['phone'];
                echo " <a href='delete.php?id=".$id."'> <button>Delete<button> </a> <br/>";

                echo "<a> <button>Update</button> </a>";
                echo "<hr>";
            }
            
        }
        else {
            echo "No records found in the database";
        }
    }
?>