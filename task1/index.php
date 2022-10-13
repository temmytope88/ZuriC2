<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_SESSION["error"])){
            $x = $_SESSION["error"];
            echo "<p class='error'>";
            echo $x;
            echo "</p>";

        }
        session_unset();
    ?>

    <form action="user_data.php" method="post">
        <p>
            <span>Name</span><br>
            <input type="text" name="name" id=""><br>
        </p>
        <p>
            <span>Email</span><br>
            <input type="email" name="email" id="" ><br>
        </p>
        <p>
            <span>Date of Birth</span><br>
            <input type="date" name="dob" id=""><br>
        </p>
        <p>
            <span>Gender</span><br>
            <input type="radio" name="gender" id="" value="Male">Male<br>
            <input type="radio" name="gender" id="" value="Female">Female<br>
        </p>
        <p>
            <span>Country</span><br>
            <input type="text" name="country" id="">
        </p>
        <p>
            <button type="submit">Submit</button>
        </p>
    </form>
</body>
</html>