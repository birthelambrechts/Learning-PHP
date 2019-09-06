<?php 

function openConnection() {
    
 // setting for database verification //
 $dbhost    = "localhost";
 $dbuser    = "root";
 $dbpass    = "password";
 $db        = "becode_genk";
 
 // Set it to one var //
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn->error);
 
 return $conn;
}


// End connection //
function closeConnection($conn) {
    $conn->close();
}


////log in and log out ////
if (isset($_POST["login"])) {
    header("Location: ../7.Mysql/login.php");
}

if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: ../7.Mysql/login.php");
}


?>
