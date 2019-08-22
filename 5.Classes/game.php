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