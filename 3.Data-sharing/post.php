<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise-1</title>
</head>
<body>
    <form action="./transfer.php" method="post">
        <label for="input">Username: </label> <br>
        <input type="text" name="username" placeholder="Please enter your username" > <br>
        <input type="text" name="firstname" placeholder="Please enter your firstname" > <br>
        <input type="text" name="familyname" placeholder="Please enter your familyname" > <br>
        <input type="date" name="birthday" > <br>
        <input type="text" name="email" placeholder="Please enter your email" > <br>
        <input type="file" name="file" placeholder="Please upload a profilepicture">
        <input type="submit" value="Submit">
    </form>
<?php


if (!empty($_POST)) {
    header('location: transfer.php');
     } 


?>
</body>
</html>