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


//buttons
switch ($_GET['hitButton']) {
    case "Hit me!":
        echo deal();
        break;
 }
switch ($_GET['standButton']) {
    case "Stand":
        echo "stand";
        break;
}
switch ($_GET['foldButton']) {
    case "Fold":
        echo "You lose!";
        break;
}
    function deal(){

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

$random_key = $_SESSION[array_rand($dec, 2)];

print_r($random_key);


}

// $_SESSION['card'] = $_SESSION[$dec[$random_key[1]]]. "" .$_SESSION[$dec[$random_key[0]]];
//                 return $_SESSION['card'];
// echo $_SESSION['card'];
    
//         $_SESSION['card'];
//             switch ($_GET['hitButton']){
//             case( $_SESSION['card'] < 21):
//             echo "hit";
//             break;
    
//             // case( $_SESSION['card'] < 21):
//             // $random = $dec[$random_key[1]];
//             // echo $_SESSION['card'] . " + " . $random ;
//             // $_SESSION['card'] =( $_SESSION['card'] + $random);
//             //     return  " = " . $_SESSION['card'];
//             // break;
    
          
    
//             // case($_SESSION['card'] = 21):
//             // echo "You win!";
//             // break;
        
//             // case( $_SESSION['card'] >= 21):
//             // echo "You lose!";
//             // unset($_SESSION['card']);
//             // break;
    
//             default:
//             echo "Something went wrong";
//             }
//         }
// ?>

</body>
</html>