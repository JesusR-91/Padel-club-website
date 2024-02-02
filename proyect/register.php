<?php

if(isset($_POST)){
    //DB CONNECTIOn
    require_once 'includes/connection.php';

    if(!isset($_SESSION)){
        session_start();
    }
    

    //USER VARIABLES
    $email = mysqli_real_escape_string($db, trim($_POST['email'])); // mysqli_real_escape_string omit special characters
    $password = mysqli_real_escape_string($db, trim($_POST['password']));
    $firstName = mysqli_real_escape_string($db, trim($_POST['firstName']));
    $lastName = mysqli_real_escape_string($db, trim($_POST['lastName']));
    $level = $_POST['level'];

    //ENCRYPT THE PASSWORD
    $hashPassword = password_hash($password, PASSWORD_BCRYPT, ['cost' =>4]);

    //ERRORS
    $errors = array();

    //!VALIDATE DATA

    //EMAIL
    if(!$email && !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Invalid email';
    }

    //PASSWORD
    if(!$password){
        $errors['password'] = 'Password cannot be empty';
    }

    //NAME
    if(!$firstName && is_numeric($firstName) && preg_match('/[0-9]', $firstName)){
        $errors['name'] = 'Invalid name';
    }

    //LAST NAME
    if(!$lastName && is_numeric($lastName) && preg_match('/[0-9]', $lastName)){
        $errors['lastName'] = 'Invalid last name';
    } else {
        $_SESSION ['errors']['general'] = "Something went wrong.";
    }

    $save_user = false;

    if(count($errors) == 0){
        $save_user = true;
        //INSERT IN DB
        $insertUser = "INSERT INTO users VALUES(null, '$email', '$hashPassword', '$firstName', '$lastName', $level, 'user', CURDATE());";
        $saveUser = mysqli_query($db, $insertUser);

        if ($save_user){
            $_SESSION['completed'] = "You're registered now!";
        }

    } else {
        $_SESSION['$errors'] = $errors;
        header('Location: user.php');
    }

}

header('Location: index.php');
