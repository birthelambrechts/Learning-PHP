<?php
include_once 'connection.php';
include 'auth.php';

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./scss/style.profile.scss">
    <title>Profile</title>
</head>
<body>
<form method='POST'> 
        <button type ='submit' name='login' class="login">Log in</button> 
        <button type ='submit' name='logout' class="logout">Log out</button> 
</form>
 <div class="container">
 
<?php
$conn = openConnection();
$link=$_GET['user'];
$sql = "SELECT first_name, last_name, 
username, linkedin, github, email, languages, avatar, video, quote, quote_author FROM hopper_2 WHERE email='$link'";
$result = $conn->query($sql);


    // output data of each row/ table
    while($row = $result->fetch_assoc()) {
        $lang = strtolower($row['languages']);
        if ($lang !== "nl"){
            $flag = $lang.".svg";
        } else {
            $flag = "be.svg";
        }
        echo
        "<div class='bill'>
        <div class='billImg'><img src='https://belikebill.ga/billgen-API.php?default=1&name=".$row['first_name']."&sex=f' / width='540px' height='330px'></div></div>  <div class='infobox'></div>
        <div class='info'>
        <div class='avatar'> <img src= ".$row['avatar']."></div>" .
        "<div class='name'>
        <H1>" . $row['first_name'] . " " . $row['last_name'] . "  " ."<img style='border: 1px solid' width='30px' src='assets/svg/" . $flag . "' alt='language flag'>" ."</H1></div>" .

        "<div class='user'><p>" . $row['username'] . "<br>" . $row['linkedin'] . "<br>" . $row['github'] . "<br>" . $row['email'] . "<br>" . $row['languages'] . "</p></div>".
        "<iframe width='386' height='210px' src=".$row['video']." frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>".
        "</div>" . "<div class='quotebox'>" .
        "<div class='quote'>" . $row['quote'] ."<br>". "~" . $row['quote_author'] . "</div>" . "</div>";
    }


        ////if logged in -> show buttons////
        if($_SESSION['email_login'] === $link ){
            echo  
            "<form method='POST'> 
                <button type ='submit' name='edit'>Edit profile</button> 
                <button type ='submit' name='delete'>Delete profile</button> 
            </form>";
        }


        ///Action for edit button////
        if (isset($_POST["edit"])) {
            header("Location: ../7.Mysql/edit.php?user=$link");
        }

        ///Action for delete button////
        if (isset($_POST["delete"])) {
            
            $sql = "DELETE FROM hopper_2 WHERE email = '$link'";
            if ($conn->query($sql) === TRUE) {
                header("Location: ../7.Mysql/register.php?profiledeleted");
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        }
        ?>
 </div>   
</body>
</html>