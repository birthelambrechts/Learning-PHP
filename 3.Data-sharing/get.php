<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise-2</title>
    <!DOCTYPE html>
<html lang="en">
    <style> 
    form {
margin-left: 43%;
    }
    </style>
<body>

    <form action="./get.php" method="GET">
        <label for="rows">Rows: </label> <br>
        <input name="rownumbers" type="number"> <br>
        <input type="submit" value="Create a table">
    </form>

<?php
    if (!empty($_GET)) {
        create($_GET["rownumbers"], 10);
    } 

    function create($rows, $cols){
        echo "<table align='center' border='2px' style='border:2px dashed grey'>"; 
        for($tr=1;$tr<=$rows;$tr++){ 
            echo "<tr>"; 
        for($td=1;$td<=$cols;$td++){ 
            echo "<td align='center' style='border:2px solid aqua'>".$tr*$td."</td>"; 
            } 
        echo "</tr>"; 
        } 
        echo "</table>";
    }
?>
</body>
</html>