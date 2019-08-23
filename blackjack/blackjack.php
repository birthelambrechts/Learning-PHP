<?php 

class blackjack{

    public $dec = ['A' => '11',
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
        'J' => '10',];
    public function test()
    {
        $random_key = array_rand($dec, 2);
        echo $dec[$random_key[0]] . " " .
             $dec[$random_key[1]];
    
    }
    echo test();
}

?>
