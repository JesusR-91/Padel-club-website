<?php

if(isset($_POST)){
    //DB CONNECTIOn
    require_once 'includes/connection.php';

    if(!isset($_SESSION)){
        session_start();
    }
    

    //USER VARIABLES
    $email = mysqli_real_escape_string($db, trim($_POST['email'])); // mysqli_real_escape_string omit special characters
    $firstName = mysqli_real_escape_string($db, trim($_POST['firstName']));
    $lastName = mysqli_real_escape_string($db, trim($_POST['lastName']));
    $level = $_POST['level'];
    $userId = $_SESSION['user']['id'];
    
    // PREPARE DECLARATION TO AVOID INJECTION SQL PROBLEMS
    $stmt = $db->prepare("UPDATE users SET email = ?, firstname = ?, lastname = ?, level = ? WHERE id = ?");
    
    // LINK VALUES
    $stmt->bind_param("ssssi", $email, $firstName, $lastName, $level, $userId);
    $stmt->execute();
    
    //UPDATE SESSION DATA
    $_SESSION['user']['email']= $email;
    $_SESSION['user']['firstname']= $firstName;
    $_SESSION['user']['lastname']= $lastName;
    $_SESSION['user']['level']= $level;

    header('Location: user.php');

    
    //!ERRORS TODO
    // $errors = array();
    
    //!VALIDATE DATA
    
    // //EMAIL
    // if(!$email && !filter_var($email, FILTER_VALIDATE_EMAIL)){
    //     $errors['email'] = 'Invalid email';
    // }
    
    // //PASSWORD
    // if(!$password){
    //     $errors['password'] = 'Password cannot be empty';
    // }
    
    // //NAME
    // if(!$firstName && is_numeric($firstName) && preg_match('/[0-9]', $firstName)){
    //     $errors['name'] = 'Invalid name';
    // }
    
    // //LAST NAME
    // if(!$lastName && is_numeric($lastName) && preg_match('/[0-9]', $lastName)){
    //     $errors['lastName'] = 'Invalid last name';
    // } else {
    //     $_SESSION ['errors']['general'] = "Something went wrong.";
    // }
    
    // $save_user = false;
    
    // if(count($errors) == 0){

    //     //INSERT IN DB

    //     // PREPARE DECLARATION TO AVOID INJECTION SQL PROBLEMS
    //     $stmt = $db->prepare("UPDATE users SET email = ?, firstname = ?, lastname = ?, level = ? WHERE id = ?");

    //     // LINK VALUES
    //     $stmt->bind_param("ssssi", $email, $firstName, $lastName, $level, $userId);
    //     $stmt->execute();

    //     // $editUser = "UPDATE users SET email = '$email', firstname = '$firstName', lastname = '$lastName', level = '$level'  WHERE id = $userId;";
    //     // $saveUser = mysqli_query($db, $editUser);

    //     $_SESSION['completed'] = "Data updated!";



    // } else {
    //     $_SESSION['$errors'] = $errors;
    //     header('Location: user.php');
    // }

}