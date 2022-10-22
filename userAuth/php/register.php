<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $data = [$username, $email, $password];
    //$dir = opendir('../storage');
    $file = fopen('', '+a');
    //file_put_contents('../storage/users.csv', $data, FILE_APPEND);
    fputcsv($file, $data);
    fclose($file);
    // echo "OKAY";
}
echo "HANDLE THIS PAGE";


