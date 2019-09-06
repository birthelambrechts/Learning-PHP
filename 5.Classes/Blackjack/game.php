<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackjack - Game</title>
    <style>
body{
    background-image: url(cards/HS.jpg);
    background-repeat: no-repeat;
    background-size: 1300px 800PX;
    font-size: 24px;
    margin: 130px 0 0 20px;
}

#button{
    width: 170px;
    height: 40px;
    margin: 10px 5px 5px 30px; 
    background-color: rgba(0, 0, 0, 0)
}

label{
    margin-left: 225px;
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

//set carddeck
$dec = 
['1' => 11,
'2' => 2,
'3' => 3,
'4' => 4,
'5' => 5,
'6' => 6,
'7' => 7,
'8' => 8,
'9' => 9,
'10' =>10,
'10,0' =>10,
'10,00' =>10,
'10,000' =>10,
];

session_start(); //To hold your value until you say so
if (!isset($_SESSION['playerHand'])){
    $_SESSION['playerHand'] = [];
}
if (!isset($_SESSION['dealerHand'])){
    $_SESSION['dealerHand'] = [];
   }
$hand = $_SESSION['playerHand'];
$dealerHand = $_SESSION['dealerHand'];

//////////////////HIT///////////////////
if($_GET['hitButton'] == "Hit me!" ){
    //set starthand (2cards to start when you click start)
    if(count($hand) < 1){
        $_SESSION['playerHand'] = $hand;
        array_push($hand, array_rand($dec));
    }
    //get new card and add to hand
    array_push($hand, array_rand($dec));
    $_SESSION['playerHand'] = $hand;
    $handSum = array_sum($hand);
    //first two images
    echo '<img src="cards/' . $hand[0] .'.png" class="playerCard" width="120px" height="auto">';
    echo '<img src="cards/' . $hand[1] .'.png" class="playerCard" width="120px" height="auto">';
    //Show cardbacks until it get a new image
    if(count($hand) < 3){
        echo '<img src="cards/cardback.png" class="playerCard" width="130px" height="185px">';
    } else {
        echo '<img src="cards/' . $hand[2] .'.png" class="playerCard" width="120px" height="auto">';
    }

    if(count($hand) < 4){
        echo '<img src="cards/cardback.png" class="playerCard" width="140px" height="185px">';
    } else {
        echo '<img src="cards/' . $hand[3] .'.png" class="playerCard" width="120px" height="auto">';
    }

    if(count($hand) < 5){
        echo '<img src="cards/cardback.png" class="playerCard" width="140px" height="185px">';
    } else {
        echo '<img src="cards/' . $hand[4] .'.png" class="playerCard" width="120px" height="auto">';
    }
    echo "<br /> Total: " . $handSum;

    if($handSum > 21){
        echo "<br />You lose<form method='get'><input type='submit' name = 'againButton' value='Try Again?'></form>";
        unset($_SESSION['playerHand']);
        return;
    }
    
    if((count($hand) == 5 && $handSum <= 21)){
        echo "<br />You Win <form method='get'><input type='submit' name = 'againButton' value='Try Again?'></form>";
        unset($_SESSION['playerHand']);
        return;
    }
}

//////////////////Stand///////////////////
if ($_GET['standButton']) {
    //upload the players hand and push in the hand
    $handSum = array_sum($hand);

    //dealer logic
    while ($dealerHandSum < 17 or (count($dealerHand) == 5)) {
        $handSum = array_sum($hand);
        array_push($dealerHand, array_rand($dec));
        $dealerHandSum = array_sum($dealerHand);
    }
    
    $_SESSION['dealerHand'] = $dealerHand;
        if ($dealerHandSum > 21) {
        $dealerHandSum = array_sum($dealerHand);
        echo "Your total: $handSum <br />Dealer total: $dealerHandSum  <br /> Dealer busted!You win <form method='get'><input type='submit' name = 'againButton' value='Try Again?'></form>";
        unset($_SESSION['dealerHand']);
        unset($_SESSION['playerHand']);
        return;
    }
    if ($handSum > $dealerHandSum) {
        $dealerHandSum = array_sum($dealerHand);
        echo "Your total: $handSum <br />Dealer total: $dealerHandSum  <br /> You win <form method='get'><input type='submit' name = 'againButton' value='Try Again?'></form>";
        unset($_SESSION['dealerHand']);
        unset($_SESSION['playerHand']);
        return;
    }
    
    if ($handSum < $dealerHandSum) {
        echo "Your total: $handSum <br />Dealer total: $dealerHandSum  <br /> You loseeee <form method='get'><input type='submit' name = 'againButton' value='Try Again?'></form>";
        unset($_SESSION['dealerHand']);
        unset($_SESSION['playerHand']);
        return;
    } 
}

//////////////////Fold///////////////////
if ($_GET['foldButton']) {
    unset($_SESSION['playerHand']);
        echo "You lose!";
        
}

?>