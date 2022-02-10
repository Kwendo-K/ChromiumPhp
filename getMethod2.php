<?php
    if(isset($_GET["submit"])) {
        $firstName = $_GET["firstName"];
        $surName = $_GET["surName"];
        $email = $_GET["email"];
        $phone = $_GET["phone"];

        echo "Your first name is : $firstName <br/>";
        echo "Your sur name is : $surName <br/>";
        echo "Your email is : $email <br/>";
        echo "Your phone number is : $phone <br/>";
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
    <form action="getMethod2.php" method="get">
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
            <input type="mail" name="email" required>
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