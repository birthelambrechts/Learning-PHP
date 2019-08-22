<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transfer</title>
</head>
<body>
    <?php 

    
$exploreArr = explode('@',$_POST["email"]);
$date = $_POST["birthday"];


$diffr = (date('Y') - date('Y',strtotime($date)));
$diff = (date('Y') - date('Y',strtotime($date))+10);
  
    
    echo "<div>".$_POST["username"]."<br>"
    .$_POST["firstname"]."<br>"
    .$_POST["familyname"]."<br>"
    .$_POST["birthday"]." is your birthdate so you are "."$diff"." years old."."<br>"
    ."Whoops i mean "."$diffr"." years old."."<br>"
    .$_POST["email"] . " is now: ".
    $exploreArr[0]."<br>".
    "</div>";

    
    ?>

</body>
</html>