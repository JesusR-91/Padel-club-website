<?php

//SESSION INIT AND CONNECTION TO DB
require_once 'includes/connection.php';

//TAKE DATA FROM FORM
if(isset($_POST)){
    $email = isset($_POST['email']) ? trim($_POST['email']) : false;
    $password = isset($_POST['password']) ? trim($_POST['password']) : false;

    //CHECK IF THE USER IS REGISTER
    $userQuery = "SELECT * FROM users WHERE email = '$email'";
    $login = mysqli_query($db, $userQuery);

    if ($login && mysqli_num_rows($login) == 1){
        $user = mysqli_fetch_assoc($login);

        //CHECK USER PASSWORD
        if(password_verify($password, $user['password'])){
            //SAVE USER DATA IN SESSION
            $_SESSION['user'] = $user;

            if(isset($_SESSION['login_error'])){
                session_unset();
            };

        } else{
            $_SESSION['login_error'] = 'Incorrect credentials';
        };
    } else {
        //ERROR MESSAGE
    }
    
    //REDIRECT TO INDEX TO RELOAD
    header('Location: user.php');

}; 



