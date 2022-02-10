<?php

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
    <div>
        <form>
            <div>
                <label>Are you sure you want to delete?</label>
                <input type="text" name="id" value="<?php echo $_GET['id'];?>">
            </div>
            <div>
                <input type="submit" name="submit" value="yes">
                <a href="select2.php">No</a>
            </div>
        </form>
    </div>
</body>
</html>