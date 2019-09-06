<?php
include_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST">

<input type="text" name="first" placeholder="Firstname" required>
<br>
<input type="text" name="last" placeholder="Lastname" required>
<br>
<input type="text" name="uid" placeholder="Username" required>
<br>
<input type="password" name="pwd" placeholder="Password" required>
<br>
<input type="password" name="pwd_conf" placeholder="Confirm password" required>
<br>
<input type="text" name="linkedin" placeholder="linkedin" required>
<br>
<input type="text" name="github" placeholder="github" required>
<br>
<input type="text" name="email" placeholder="Email" required>
<br>
<select name="languages" id="languages" required>
  <option value="nl">NL</option>
  <option value="fr">FR</option>
  <option value="gb-eng">EN</option>
  <option value="de">DE</option>
  <option value="hu">HU</option>
</select>
<br>
<input type="text" name="avatar" placeholder="avatar" required>
<br>
<input type="text" name="video" placeholder="Link to favorite youtube video" required>
<br>
<input type="text" name="quote" placeholder="Insert your favorite quote" required>
<br>
<input type="text" name="quote_author" placeholder="Enter the name of the author" required>
<br>
<button type ="submit" name="submit">Send</button>


</form>
</body>
</html>