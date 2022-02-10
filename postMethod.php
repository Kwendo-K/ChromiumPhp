<?php
    if (isset($_POST["submit"])) {
        $firstName = $_POST["fname"];
        $secondName = $_POST["sname"];
        $mail = $_POST["email"];

        echo "Your first name is : $firstName <br/>";
        echo "Your second name is : $secondName <br/>";
        echo "Your email is : $mail <br/>";
        echo "<a><button>Delete</button></a>";
    }
    else {
        echo "Please fill the form!";
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
<form action="postMethod.php" method="post">
        <div>
            <label>FirstName</label>
            <input type="text" name="fname" required>
        </div>
        <div>
            <label>SurName</label>
            <input type="text" name="sname" required>
        </div>
        <div>
            <label>Email</label>
            <input type="mail" name="email" required>
        </div>
        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
</body>
</html>