<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random</title>
    <style> 
    body{
        background-image: url(https://images.pexels.com/photos/1831119/pexels-photo-1831119.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
        font-size: 24px;
        margin-left: 7%;
        margin-top: 15%;
        background-size: 100%;
    }

    input{
        font-size: 22px;
    }
    
    </style>
<body>
    <form method="post">
        <input type="number" min="1" name="number" placeholder="Your number between 1-10">
        <input type="submit" value="Submit">
    </form>
    <?php
session_start();

$input = $_POST['number'];

if(!isset($_SESSION['random'])){
$_SESSION['random'] = rand(1,10);
}

if (!empty($_POST)){
if($input < $_SESSION['random']){
echo "<p>Higher</p>";

}
else if ($input > $_SESSION['random']) {
echo "<p>Lower</p>";

} else {
echo "<p>You are a winner!</p>";
unset($_SESSION['random']);
}
}

?>
</body>

</html>