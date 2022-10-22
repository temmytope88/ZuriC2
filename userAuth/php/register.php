<?php
    if(isset($_POST['submit'])){
        $username = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        registerUser($username, $email, $password);

    }

    function registerUser($username, $email, $password){

        $data = [$username, $email, $password];

        $file = fopen("../storage/users.csv", "+w");

        if ($file){
            fputcsv($file, $data);
            fclose($file);
        }


        // echo "OKAY";
    }
    echo "HANDLE THIS PAGE";


