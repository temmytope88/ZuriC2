<?php

    $name = "";
    $gender ="";
    $DOB = "";
    $email ="";
    $country ="";
    $err = 0;

    if($_POST['name'] == null){
        $err++;
    }
    else{
        $name = $_POST["name"];
    }

    if($_POST['country'] == null){
        $err++;
    }
    else{
        $country = $_POST["country"];
    }

    if($_POST['dob'] == null){
        $err++;
    }
    else{
        $DOB = $_POST["dob"];
    }

    if(isset($_POST['gender'])){
        $gender = $_POST["gender"];
    }
    else{
       $err++;
    }

    if($_POST['email'] == null){
        $err++;
    }
    else{
        $email = $_POST["email"];
    }


    if($err > 0){
        session_start();
        $_SESSION["error"] = "all fields are required";
        header("location:index.php");
    }
    else{

        $file = fopen("userdata.csv", "a+");
        $obj = array("name"=>$name, "gender"=>$gender, "country"=>$country, "DOB"=>$DOB, "email"=>$email);
        $json = json_encode($obj);
        $input = $json."\n";
        fwrite($file, $input);
        fclose($file);
        print_r($_POST);
    }





