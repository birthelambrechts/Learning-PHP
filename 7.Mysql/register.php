<?php
include_once 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./scss/style.register.scss">
    <title>Register</title>
</head>
<body>
  <div class="buttons">
<form method='POST'> 
        <button type ='submit' name='login' class="login">Log in</button> 
        <button type ='submit' name='logout' class="logout">Log out</button> 
</form>
</div>
<div class="formy">
<form method="POST">

<input type="text" name="first" value="<?php echo $first ?>" required placeholder="Firstname" }}>
<br>
<input type="text" name="last"  value="<?php echo $last ?>" placeholder="Lastname" required>
<br>
<input type="text" name="uid"  value="<?php echo $uid ?>" placeholder="Username" required>
<br>
<input type="password" name="pwd"  placeholder="Password" required>
<br>
<input type="password" name="pwd_conf"  placeholder="Confirm password" required>
<br>
<input type="text" name="linkedin"  value="<?php echo $linkedin ?>" placeholder="linkedin" required>
<br>
<input type="text" name="github" value="<?php echo $github ?>" placeholder="github" required>
<br>
<input type="text" name="email" value="<?php echo $email ?>" placeholder="Email" required>
<br>
<select name="languages" id="languages" required>
  <option value="nl">NL</option>
  <option value="fr">FR</option>
  <option value="gb-eng">EN</option>
  <option value="de">DE</option>
  <option value="hu">HU</option>
</select>
<br>
<input type="text" name="avatar"  value="<?php echo $avatar ?>" placeholder="avatar" required>
<br>
<input type="text" name="video"  value="<?php echo $video ?>" placeholder="Link to favorite youtube video" required>
<br>
<input type="text" name="quote"  value="<?php echo $quote ?>" placeholder="Insert your favorite quote" required>
<br>
<input type="text" name="quote_author"  value="<?php echo $quote_author ?>" placeholder="Enter the name of the author" required>
<br>
<button type ="submit" name="submit">Send</button>
</form>
</div>
</body>
</html>