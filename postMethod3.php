<?php
    #connecting the connect php script
    include "connect2.php";

    #
    if(isset($_POST["submit"])) {
        $firstName = $_POST["firstName"];
        $surName = $_POST["surName"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        #creating the sql query to insert data into the database
        $sql = " INSERT INTO form(firstName, surName, email, phone)
        VALUES ('$firstName','$surName','$email','$phone',)";

        #executing the sql query
        $result = mysqli_query($conn, $sql);

        #checking if the data was saved in the database
        if($result) {
            echo "Data added to the database";
        }
        else {
            echo "Error adding data into the database! $sql " .mysqli_connect_error($conn);
        }
    }
    else {
        echo "Please fill in your form";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="postMethod3.php" method="post">
        <div>
            <div>
                <label>FirstName:</label>
                <input type="text" name="firstName" required>
            </div>
            <div>
                <label>SurName:</label>
                <input type="text" name="surName" rquired>
            </div>
            <div>
                <label>Email:</label>
                <input type="mail" name="email" required>
            </div>
            <div>
                <label>Phone:</label>
                <input type="number" name="phone" required>
            </div>
            <div>
                <input type="submit" name="submit" value="Submit">
            </div>
        </div>
    </form>
</body>
</html>