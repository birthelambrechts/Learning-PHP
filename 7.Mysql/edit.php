<?php
    include_once 'connection.php';
    include 'auth.php';
    $conn = openConnection();

    $link = $_GET['user'];
    $user_sql = "SELECT first_name, last_name, username, linkedin, github, email, languages, avatar, video, quote, quote_author FROM hopper_2 WHERE email='$link'";
    $user_result = $conn->query($user_sql);

        while($row = $user_result->fetch_assoc()) {  
            echo 
            "<form action='' method='POST'>
            <input type='text' name='first' value='" . $row['first_name'] ."' placeholder='First name' required><br>
            <input type='text' name='last' value='" . $row['last_name'] ."' placeholder='Last name' required><br>
            <input type='text' name='uid' value='" . $row['username'] ."' placeholder='Username' required><br>
            <input type='text' name='linkedin'  value='" . $row['linkedin'] ."' placeholder='LinkedIn profile' required><br>
            <input type='text' name='github' value='" . $row['github'] ."' placeholder='Github profile' required><br>
            <select name='languages' id='languages' required>
                <option value='nl'>NL</option>
                <option value='fr'>FR</option>
                <option value='gb-eng'>EN</option>
                <option value='de'>DE</option>
                <option value='hu'>HU</option>
            </select><br>
            <input type='text' name='avatar' value='" . $row['avatar'] ."' placeholder='Avatar' required><br>
            <input type='text' name='video' value='" . $row['video'] ."' placeholder='Video' required><br>
            <input type='text' name='quote' value='" . $row['quote'] ."' placeholder='Quote' required><br>
            <input type='text' name='quote_author' value='" . $row['quote_author'] ."' placeholder='Quote_author' required><br>
            <input type='submit' name='edit_submit' value='Edit info!'>
        </form>";
        }

        if(isset($_POST['edit_submit'])) {
        $edit_sql = "UPDATE hopper_2 SET first_name='$first', last_name='$last', username='$uid', linkedin='$linkedin', github='$github', languages='$languages', avatar='$avatar', video='$video', quote='$quote', quote_author='$quote_author' WHERE email='$link'";

        if ($conn->query($edit_sql) === TRUE) {
            header("Location: ../7.Mysql/profile.php?user=$link");
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
?>

