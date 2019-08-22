<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blackjack - Classes</title>
</head>
<body>
    <?php
class Blackjack
{
    // Declare  properties
    public $card = 0;
    
    // Method to hit a card (0-11)
    public function hit(){
        $card = 0;
        switch ($card){
        case($card = 0):
            $card = (rand(1-11)+(rand(1-11)));
            echo $card;
            break;

        case($card < 21):
            $card + (rand(1-11));
            echo $card;
        break;

        case($card > 21):
            echo "You lose!";
        break;

        case($card = 21):
        echo "You win!";
        break;

        default:
        echo "Something went wrong";
    }
}
    
    // public $score = $card;

    // // Method to stand
    // public function stand(){
    //     //startDealersturn();
    //     echo "End of turn";
    // }

    // // Method to surrender/give up
    // public function surrender(){
    //     return ($this->length * $this->width);
    // }
}

class BlackjackDealer
{
    // Declare  properties
    public $cardDealer = 0;
    
    // Method to hit a card (0-11)
    public function hit(){
        
        if($cardDealer = 0){
            $cardDealer = (rand(1-11)+(rand(1-11)));
        }
        echo $cardDealer;
        if($cardDealer < 21){
            $cardDealer + (rand(1-11));
            echo $cardDealer;
        }
        if($cardDealer > 21){
            echo "You lose";
        }
    }
    
     public $scoreDealer = $cardDealer;

    // // Method to stand
    // public function stand(){
    //     //startDealersturn();
    //     echo "End of turn";
    // }

    // // Method to surrender/give up
    // public function surrender(){
    //     return ($this->length * $this->width);
    // }
}
?>
</body>
</html>