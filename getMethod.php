 <?php
    if (isset($_GET["submit"])) {
        $firstName = $_GET["fname"];
        $surName = $_GET["sname"];
        $mail = $_GET["email"];

        echo "Your first name is $firstName <br/>";
        echo "Your surname is $surName <br/>";
        echo "Your email is $mail <br/>";
    }
    else {
        echo "Please fill your form!";
    }

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Get Method</title>
 </head>
 <body>
    <form>
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