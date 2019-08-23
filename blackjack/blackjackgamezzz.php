<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blackjack - Game</title>
</head>
<body>

<form method="get">
        <label for="submit">What would you like to do?</label> <br>
        <input type="submit" name="hitButton" value="Hit me!">
        <input type="submit" name="standButton" value="Stand">
        <input type="submit" name="foldButton" value="Fold">
    </form>
<?php
//carddeck
$dec = 
['A' => '11',
'2' => '2',
'3' => '3',
'4' => '4',
'5' => '5',
'6' => '6',
'7' => '7',
'8' => '8',
'9' => '9',
'10' => '10',
'K' => '10',
'Q' => '10',
'J' => '10'];

$hand = [];

session_start(); //To hold your value until you say so
$random_key1  = array_rand($dec);
$random_key2 = array_rand($dec);
$random_key3 = array_rand($dec);
$random_key4 = array_rand($dec);
$random_key5 = array_rand($dec);

$card1 = $_SESSION['random1'];
$card2 = $_SESSION['random2'];

array_push($hand, $card1, $card2);
$handSum = array_sum($hand);



//declare "vaste" value
if(!isset($_SESSION['random1'])){
    $_SESSION['random1'] = $dec[$random_key1];
    }

if(!isset($_SESSION['random2'])){
    $_SESSION['random2'] = $dec[$random_key2];
     }


echo $card1 . " " . $card2;


switch ($_GET['hitButton']) {
    case "Hit me!":
    if (isset($_GET['hitButton'])) {
        if (!($_SESSION['hitButton'])) {
            $_SESSION['hitButton'] = 1;
        } else {
            $count = $_SESSION['hitButton'] + 1;
            $_SESSION['hitButton'] = $count;
        }
    }
    echo "weeeee" . $_SESSION['hitButton'] . "weeeeee";
        if ($handSum == 21) {
            echo "You win!";
        }
        if ($_SESSION['hitButton']=3) {
            if ($handSum < 21) {
                echo "hit again";
            }
            // switch ($card3) {
                // case "":
                // if (!isset($_SESSION['random3'])) {
                //     $_SESSION['random3'] = $dec[$random_key3];
                // }
                //     $card3 = $_SESSION['random3'];
                //     array_push($hand, $card3);
                //     echo "   card 3= " . $card3 . "   ";
                //     echo "++++++" . array_sum($hand) . "+++++++";
        }
            
        
                    break;
    }


switch ($_GET['standButton']) {
    case "Stand":
    unset($_SESSION['random1']);//reset 
    unset($_SESSION['random2']);//reset
    unset($_SESSION['random3']);//reset 
    unset($_SESSION['random4']);//reset
    unset($_SESSION['random5']);//reset
    unset($_SESSION['hitButton']);//reset
    unset($hand);
        break;
}
switch ($_GET['foldButton']) {
    case "Fold":
        echo "You lose!";
        break;
}

?>