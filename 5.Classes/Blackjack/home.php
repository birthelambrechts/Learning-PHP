<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackjack - Home</title>
    <style>
body{
    background-image: url(cards/startHS.jpg);
    background-repeat: no-repeat;
    background-size: 1300px 680PX;
    font-size: 24px;
    
}
.start{
    color: black;
    font-size: 40px;
    margin-left: 40%;
    margin-top: 37%;
}

.button{
    width: 100px;
    height: 50px;
    background-color: rgba(0, 0, 0, 0);
    color: black;
    margin-left: 120px;
}
</style>
</head>
<body>
<div class="start">    
<form action="./game.php" method="GET">
        <label for="submit">Wanna play a game?</label> <br>
        <input type="submit" class="button" value="YES!">
    </form>
</div>

    <?php
    
?>
</body>
</html>