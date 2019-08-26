<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackjack - Game</title>
    <style>

body{

 background-color:green;
 margin: 25px;
}

#button{
    margin: 10px;
    padding: 10px;
}

.playerCard{
    width:130px;
    height:auto;
    background-image:url('cardback.png');
}

</style>
</head>

<body>

<form method="get">
        <label for="submit">What would you like to do?</label> <br>
        <input type="submit" id="button" name="hitButton" value="Hit me!">
        <input type="submit" id="button" name="standButton" value="Stand">
        <input type="submit" id="button" name="foldButton" value="Fold">
    </form>
<?php
//carddeck
$dec = 
['1' => 1,
'2' => 2,
'3' => 3,
'4' => 4,
'5' => 5,
'6' => 6,
'7' => 7,
'8' => 8,
'9' => 9,
'10' =>10];

session_start(); //To hold your value until you say so
if (!isset($_SESSION['playerHand'])){
 $_SESSION['playerHand'] = [];
}
if (!isset($_SESSION['dealerHand'])){
    $_SESSION['dealerHand'] = [];
   }

$hand = $_SESSION['playerHand'];
$dealerHand = $_SESSION['dealerHand'];

if(count($hand) < 2){
    $_SESSION['playerHand'] = $hand;
    array_push($hand, array_rand($dec));
    array_push($hand, array_rand($dec));
    echo '<img src="cards/' . $hand[0] .'.png" class="playerCard" width="130px" height="auto">';
    echo '<img src="cards/' . $hand[1] .'.png" class="playerCard" width="130px" height="auto">'.'<br />';
    echo '<br />';

}

if($_GET['hitButton'] == "Hit me!" ) {
 
    array_push($hand, array_rand($dec));

    $_SESSION['playerHand'] = $hand;
    $handSum = array_sum($hand);
    echo '<img src="cards/' . $hand[0] .'.png" class="playerCard" width="130px" height="auto">';
    echo '<img src="cards/' . $hand[1] .'.png" class="playerCard" width="130px" height="auto">';
    echo '<img src="cards/' . $hand[2] .'.png" class="playerCard" width="130px" height="auto">';
    echo '<img src="cards/' . $hand[3] .'.png" class="playerCard" width="130px" height="auto"  src="#">';
    echo '<img src="cards/' . $hand[4] .'.png" class="playerCard" width="130px" height="auto"  src="#">';
 

    echo "<br /> Total: " . $handSum;

    if($handSum > 21){
        echo "<br />You lose<form method='get'><input type='submit' name = 'againButton' value='Try Again'></form>";
        unset($_SESSION['playerHand']);
        return;
    }
    
    if($handSum == 21 && $dealerHandSum != 21 || (count($hand) == 5 && $handSum <= 21)){
        echo "<br />You Win<form method='get'><input type='submit' name = 'againButton' value='Try Again'></form>";
        unset($_SESSION['playerHand']);
        return;
    }
}

if ($_GET['standButton']) {
    //dealer logic
    $_SESSION['dealerHand'] = $dealerHand;
    array_push($dealerHand, array_rand($dec));
    $dealerHandSum = array_sum($dealerHand);
    if($dealerHandSum > 21){
        $handSum = array_sum($hand);
        echo "Your total: $handSum <br />Dealer total: $dealerHandSum  <br /> You win <form method='get'><input type='submit' name = 'againButton' value='Try Again'></form>";
        unset($_SESSION['playerHand']);
        return;
    }
    
    if($dealerHandSum == 21 || (count($dealerHand) == 5 && $dealerHandSum <= 21)){
        $handSum = array_sum($hand);
        echo "Your total: $handSum <br />Dealer total: $dealerHandSum  <br /> You lose <form method='get'><input type='submit' name = 'againButton' value='Try Again'></form>";
        unset($_SESSION['playerHand']);
        return;
    }

    
}

if ($_GET['foldButton']) {
    unset($_SESSION['playerHand']);
        echo "You lose!";
        
}

?>