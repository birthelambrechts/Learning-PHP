<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise-1</title>
</head>
<body>
    <form action="./post.php" method="post">
        <label for="input">Username: </label> <br>
        <input type="text" name="username" placeholder="Please enter your username" required> <br>
        <input type="submit" value="Submit">
    </form>
<?php
if (!empty($_POST)) {
     echo "<div>"."Welcome ".$_POST["username"]."!"."</div>";
     } 
?>
</body>
</html>