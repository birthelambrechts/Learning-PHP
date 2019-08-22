<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise-3</title>
</head>
<body>
    <form action="" method="GET" onsubmit="InsertJoke()">
        <textarea type="text" id="joke" placeholder="Type your best joke here"></textarea> <br>
        <input type="submit" value="Send me your joke"> 
    </form>
    <?php
    if (!empty($_COOKIE["joke"])) {
        echo $_COOKIE["joke"];
    }
    ?>
</body>
<script>
    function InsertJoke() {
        document.cookie = "joke=" + document.getElementById("joke").value;
    }
</script>
</html>