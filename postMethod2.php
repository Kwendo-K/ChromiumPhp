<?php
    include "connect.php";

    if(isset($_POST["submit"])) {
        $firstName = $_POST["firstName"];
        $surName = $_POST["surName"];
        $emailAddress = $_POST["emailAddress"];
        $phone = $_POST["phone"];

        #adding data into the database
        $sql = "INSERT INTO details(firstName, surName, emailAddress, phone)
        VALUES ('$firstName', '$surName', '$emailAddress', '$phone')";

        #executing the query
        $result = mysqli_query($link, $sql);

        #checking the rsult
        if ($result) {
            echo "Record added successfully";
        }
        else {
            echo "Error executing the query! $sql " .mysqli_connect_error($link);
        }

    }
    else {
        echo "Please fill in your form to continue!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Method 2</title>
</head>
<body>
    <form action="postMethod2.php" method="post">
        <div>
            <label>First Name</label>
            <input type="text" name="firstName" required>
        </div>
        <div>
            <label>Sur Name</label>
            <input type="text" name="surName" required>
        </div>
        <div>
            <label>Email</label>
            <input type="mail" name="emailAddress" required>
        </div>
        <div>
            <label>Phone</label>
            <input type="number" name="phone" required>
        </div>
        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
</body>
</html>