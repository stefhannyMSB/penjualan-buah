<?php
    if(isset($_POST['tombol'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo
    'Username : '. $username .
    '<br>Password : '. $password;
    }
    
?>