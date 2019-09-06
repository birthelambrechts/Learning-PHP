<?php 
 include_once 'connection.php';
 if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:../7.Mysql/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./scss/style.index.scss">
    <title>index</title>
    <style> body{
        font-size: 20px;
    }
    </style>
</head>
<body>
<form method='POST'> 
        <button type ='submit' name='login' class="login">Log in</button> 
        <button type ='submit' name='logout' class="logout">Log out</button> 
</form>

    <table>       
<?php
$conn = openConnection();


$sql = "SELECT id, first_name, last_name, email, languages, github FROM hopper_2";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while ($row = $result->fetch_assoc()) {

    $lang = strtolower($row['languages']);
    if ($lang !== "nl"){
    $flag = $lang.".svg";
    } else {
    $flag = "be.svg";
    };

    $email = $row["email"];
    echo  "<tr>
<td width='180px' ><a href='profile.php?user=$email'>". $row["first_name"] ."</a></td>
<td width='180px'>" . $row["last_name"] . "</td>
<td width='180px'>" . $row["email"] . "</td>
<td width='180px'><img style='border: 1px solid' width='30px' src='assets/svg/" . $flag . "' alt='language flag'></td>
<td width='180px'>" . $row["github"] . "</td>

</tr>";
}
} else {
     echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>