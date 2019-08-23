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


session_start();

// switch maken
switch ($_GET['hitButton']) {
    case "Hit me!":
        echo foo();
        break;
 }
switch ($_GET['standButton']) {
    case "Stand":
        echo stand();
        break;
}
switch ($_GET['foldButton']) {
    case "Fold":
        echo "You lose!";
        break;
}


function foo()
{
    $_SESSION['card'];
        switch ($_GET['hitButton']){

        case($_SESSION['card'] === 0):
        $_SESSION['card'] = (rand(1-11)+(rand(1-11)));
            return $_SESSION['card'];
        break;

        case( $_SESSION['card'] < 21):
        $random = (rand(1,10));
        echo $_SESSION['card'] . " + " . $random ;
        $_SESSION['card'] =( $_SESSION['card'] + $random);
            return  " = " . $_SESSION['card'];
        break;

      

            case($_SESSION['card'] = 21):
            echo "You win!";
            break;
    
            case( $_SESSION['card'] >= 21):
            echo "You lose!";
            unset($_SESSION['card']);
            break;

            default:
            echo "Something went wrong";
        }

    }
    


// class Blackjack
// {
// // Declare  properties
//     public $card = 0;
//    public $test = "hihi";
    
//     // Method to hit a card (0-11)
    
//     public function hit(){
//         echo "yay";
//         $card = 0;
//         switch ($_GET['hitButton']){
//         case($card = 0):
//             $card = (rand(1-11)+(rand(1-11)));
//             return $card;
//             break;

//         case($card < 21):
//             $card + (rand(1-11));
//             echo $card;
//         break;

//         case($card > 21):
//             echo "You lose!";
//         break;

//         case($card = 21):
//         echo "You win!";
//         break;

//         default:
//         echo "Something went wrong";
//     }

// }}
// $obj = new Blackjack();
// echo $obj->card;


function bar()
{
   $string = 'Hello bar';
   return $string;
}
?>

</body>
</html>






<!-- //carddeck
$dec = ['A' => '11',
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

$card4 = $_SESSION['random4'];
$card5 = $_SESSION['random5'];
array_push($hand, $card1, $card2);
$handSum = array_sum($hand);



//declare "vaste" value
if(!isset($_SESSION['random1'])){
    $_SESSION['random1'] = $dec[$random_key1];
    }

if(!isset($_SESSION['random2'])){
    $_SESSION['random2'] = $dec[$random_key2];
     }



if(!isset($_SESSION['random4'])){
    $_SESSION['random4'] = $dec[$random_key4];
    }

if(!isset($_SESSION['random5'])){
    $_SESSION['random5'] = $dec[$random_key5];
    }

echo $card1 . " " . $card2;

function dealCards () {
$dec = ['A' => '11',
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

array_push 
}

switch ($_GET['hitButton']) {
    case "Hit me!":
    if ($handSum == 21){
        echo "You win!"; 
    }
    else if ($handSum < 21){
        if ($card3 == ""){
        if(!isset($_SESSION['random3'])){
            $_SESSION['random3'] = $dec[$random_key3];
            } 
            $card3 = $_SESSION['random3'];
            array_push($hand, $card3);
            echo "   card 3= " . $card3 . "   ";
            echo "++++++" . array_sum($hand) . "+++++++";
        }

        if ($card3 !== "" && (array_sum($hand)<21)){
            
            if(!isset($_SESSION['random4'])){
                $_SESSION['random4'] = $dec[$random_key3];
                } 
                $card4 = $_SESSION['random4'];
                array_push($hand, $card4);
                echo "   card 4= " . $card4 . "   ";
                echo "++++++" . array_sum($hand) . "+++++++";
            }if(array_sum($hand)>21) {
                echo "more than 21"; 
            }
    }

    // echo " " . $card4;
    // echo " " . $card5;
    break;
 }
switch ($_GET['standButton']) {
    case "Stand":
    unset($_SESSION['random1']);//reset 
    unset($_SESSION['random2']);//reset
    unset($_SESSION['random3']);//reset 
    unset($_SESSION['random4']);//reset
    unset($_SESSION['random5']);//reset
    unset($hand);
        break;
}
switch ($_GET['foldButton']) {
    case "Fold":
        echo "You lose!";
        break;
} -->

 
<!-- 

//carddeck
$dec = ['A' => '11',
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
$random_key1 = array_rand($dec);
$random_key2 = array_rand($dec);
$random_key3 = array_rand($dec);
$random_key4 = array_rand($dec);
$random_key5 = array_rand($dec);

$card1 = $_SESSION['random1'];
$card2 = $_SESSION['random2'];

$card4 = $_SESSION['random4'];
$card5 = $_SESSION['random5'];
array_push($hand, $card1, $card2);
$handSum = array_sum($hand);
echo "++++++" . $handSum . "+++++++";


//declare "vaste" value
if(!isset($_SESSION['random1'])){
    $_SESSION['random1'] = $dec[$random_key1];
    }

if(!isset($_SESSION['random2'])){
    $_SESSION['random2'] = $dec[$random_key2];
     }



if(!isset($_SESSION['random4'])){
    $_SESSION['random4'] = $dec[$random_key4];
    }

if(!isset($_SESSION['random5'])){
    $_SESSION['random5'] = $dec[$random_key5];
    }

echo $card1 . " " . $card2;

switch ($_GET['hitButton']) {
    case "Hit me!":
    if ($handSum == 21){
        echo "You win!"; 
    }
    else if ($handSum < 21){
        if ($card3 == ""){
        if(!isset($_SESSION['random3'])){
            $_SESSION['random3'] = $dec[$random_key3];
            } 
            $card3 = $_SESSION['random3'];
            array_push($hand, $card3);
            echo "handsum = " . array_sum($hand);
        }else{
            echo "more than 21";
            print_r($hand);
        }
    }

    // echo " " . $card4;
    // echo " " . $card5;
    break;
 }
switch ($_GET['standButton']) {
    case "Stand":
    unset($_SESSION['random1']);//reset 
    unset($_SESSION['random2']);//reset
    unset($_SESSION['random3']);//reset 
    unset($_SESSION['random4']);//reset
    unset($_SESSION['random5']);//reset
    unset($hand);
        break;
}
switch ($_GET['foldButton']) {
    case "Fold":
        echo "You lose!";
        break;
}

  -->
