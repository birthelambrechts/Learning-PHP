<?php

        // Variable with random strings
        // ============================
        $strings = array(
            "Kirito",
            "Erza",
            "Akatsuki",
            "Shiro",
            "Leo",
            "Rundel-Haus-Code",
            "Ken Kaneki",
            "Glenn Radars",
            "Momonga-Sama",
        );
    

        $pictures = array(
            "https://www.pixelstalk.net/wp-content/uploads/2016/08/HD-PC-Wallpaper-2016.jpg",
            "https://wallpaperaccess.com/full/190815.jpg",
            "https://images7.alphacoders.com/528/528418.jpg",
            "https://wallpaperaccess.com/full/300068.jpg",
            "https://www.hdwallpaper.nu/wp-content/uploads/2016/02/golden-gate_wallpaper_030.jpg"
        );

        $pickRandom = array_rand($pictures);

    
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Javascript to PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <header id="header" style="background:url(<?php echo $pictures[$pickRandom] ?>) center center/cover no-repeat;">
        <div class="overlay"></div>
        <div class="overlay-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Welcome to the Javascript - PHP exercise</h1>
                        <p>Read the code of this page, understand it, then convert it to the same functionality in PHP!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="exercises">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="loop-while" class="my-4 p-4 bg-white shadow-sm border">
                        <?php loopy();?>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div id="username-generator" class="my-4 p-4 bg-white shadow-sm border">
                        <p> <?php colors() ?> </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>

<?php
function loopy() {
    echo "<h2>Exercise 1: Loops and stuff</h2>";
    global $strings;
    $arrayCopy = array_slice($strings, 0);
    while(count($arrayCopy) > 0) {
      $randomize = $strings[mt_rand(0,8)];
      echo "<ul>\n<li>$randomize</li></ul>\n";
      if (($del = array_search($randomize, $arrayCopy)) !== false) {
       unset($arrayCopy[$del]);
       }
    }
  }


  function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}


function colors(){
    
$rndNumb = mt_rand(0,3);
$names = str_split("Rafael Lambelin Selene Nijst.", $rndNumb);
$arrlength = count($names);
$random = random_color();

for($x = 0; $x < $arrlength; $x++) {
    echo "<span style='color: #$random'>$names[$x]</span>";
    $random = random_color();
}
}
?>