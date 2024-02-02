<?php

//ERROR HANDLER
function showErrors($errors, $field){
    $alert = '';
    if(isset($errors[$field]) && !empty($field)){
        $alert = "<div class='alert'>".$errors[$field]."</div>";
    }

    return $alert;
};

// CLEAN ERRORS
function deleteErrors(){
    if(isset($_SESSION['errors'])){
        $_SESSION['errors'] = null;
    }
    
    if(isset($_SESSION['completed'])){
        $_SESSION['completed'] = null;
    }
    
    session_unset();
};

//GET USERS
function getUser($userId, $db){
    $sqlQuery = "SELECT * FROM users WHERE (id = $userId);";
    $user = mysqli_query($db, $sqlQuery);

    $result = array();

    // TO CHECK IF WE HAVE SOME MATCHES IN THE QUERY
    if ($user && mysqli_num_rows($user) >= 1){
        $result = mysqli_fetch_assoc($user);
    }

    return $result;
};

//GET TEAMS
function getTeams($userId, $db){
    $sqlQuery = "SELECT * FROM teams WHERE (user1_id = $userId OR user2_id = $userId);";
    $teams = mysqli_query($db, $sqlQuery);

    $result = array();

    // TO CHECK IF WE HAVE SOME MATCHES IN THE QUERY
    if ($teams && mysqli_num_rows($teams) >= 1){
        $result = $teams;
    }

    return $result;
};

//GET RIVALS
function getRival($teamId, $db){
    $sqlQuery = "SELECT * FROM teams WHERE (id = $teamId);";
    $team = mysqli_query($db, $sqlQuery);

    $result = array();

    // TO CHECK IF WE HAVE SOME MATCHES IN THE QUERY
    if ($team && mysqli_num_rows($team) >= 1){
        $result = $team;
    }

    return $result;
};

// GET MATCHES

function getMatches($userId, $db){
    $team = mysqli_fetch_assoc(getTeams($userId, $db));
    $sqlQuery = "SELECT * FROM matches WHERE (team1_id = $team[id] OR team2_id = $team[id]);";
    $matches = mysqli_query($db, $sqlQuery);

    $result = array();

    // TO CHECK IF WE HAVE SOME MATCHES IN THE QUERY
    if ($matches && mysqli_num_rows($matches) >= 1){
        $result = $matches;
    }

    return $result;
};

// GET RESERVATIONS
function getReservation($day, $hour, $db){

    $sql = "SELECT * FROM reservations WHERE (reservation_date = '$day' AND hour = '$hour');";
    $result = $db->query($sql);

    return $result;

};

// SAVE RESERVATIONS
function saveReservation($day, $hour, $userId, $court, $db, $state){
    $sql = "INSERT INTO reservations (user_reservation, court, reservation_date, hour, state) VALUES ('$userId', $court, '$day', '$hour', '$state');";
    $result = $db->query($sql);

    if($result){
        return 'Registration done properly';
    } else {
        return 'Something went wrong';
    }
};

//! GET TOURNAMENTS TODO
