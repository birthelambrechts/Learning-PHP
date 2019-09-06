<?php
session_start();
include_once 'connection.php';

// initializing variables
$email_login   = "";
$errors = array(); 

$conn = openConnection();

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'] ;
$pwd = $_POST['pwd'];
$pwd_hash = md5($pwd);
$pwd_conf = $_POST['pwd_conf'];
$pwd_conf_hash = md5($pwd_conf);
$linkedin = $_POST['linkedin'];
$github = $_POST['github'];
$email = $_POST['email'];
$languages = $_POST['languages'];
$avatar = $_POST['avatar'];
$video = $_POST['video'];
$quote = $_POST['quote'];
$quote_author = $_POST['quote_author'];


    
///////////////registration form//////////////////
if (isset($_POST["submit"])) {
    if ($_POST["pwd"] !== $_POST["pwd_conf"])  {
    echo "<script type='text/javascript'>alert(\"The passwords don't match. Please try again.\");</script>";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<script type='text/javascript'>alert(\"Enter a valid email.\");</script>";
    }

    if (($_POST["pwd"] === $_POST["pwd_conf"]) && (filter_var($email, FILTER_VALIDATE_EMAIL))) {
        $sql ="INSERT INTO hopper_2 (first_name, last_name, 
username, pwd, pwd_conf, linkedin, github, email, languages, avatar, video, quote, quote_author)
VALUES ('$first', '$last', '$uid', '$pwd_hash', '$pwd_conf_hash' ,'$linkedin','$github', '$email', '$languages','$avatar','$video','$quote','$quote_author')";
        echo "<script type='text/javascript'>alert(\"Success!\");</script>";
        if ($result = mysqli_query($conn, $sql)) {
            header("Location: ../7.Mysql/profile.php?user=$email");
        }
    }
}


///////////////Login form///////////////////////

if (isset($_POST['login_user'])) {
    $email_login = mysqli_real_escape_string($conn, $_POST['email_login']);
    $pwd_login = mysqli_real_escape_string($conn, $_POST['pwd_login']);
  
    if (empty($email_login)) {
        array_push($errors, "email is required");
    }
    if (empty($pwd_login)) {
        array_push($errors, "Password is required");
    }

    
    if (count($errors) == 0) {
    
        $pwd_login = md5($pwd_login);
        $login_query = "SELECT * FROM hopper_2 WHERE email='$email_login' AND pwd='$pwd_login'";
        $results = mysqli_query($conn, $login_query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['email_login'] = $email_login;
          $_SESSION['success'] = "You are now logged in";
          header("Location: ./index.php");
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

?>