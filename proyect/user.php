<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matches</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background-color: lightblue">
    <?php 
    require_once 'includes/header.php';
    require_once 'includes/connection.php';
    require_once 'includes/helpers.php';    
    ?>


    <div id="main">
        <?php require_once 'includes/sidebar.php';?>

        <div>

        <div class="container">
            <div class="userContainer">
                <!-- USER DATA -->
                <div class="card userData">
                    <h5 style="color: black">Your data</h5>
                    <p><b>Name: </b><?= $_SESSION['user']['firstname'] ?></p>
                    <p> <b>Last name: </b> <?= $_SESSION['user']['lastname'] ?></p>
                    <p> <b>email: </b><?= $_SESSION['user']['email'] ?></p>
                    <p> <b>Level: </b> <?= $_SESSION['user']['level'] ?></p>
                    <button type="button" class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#editDataModal">Edit</button>
                </div>

                <!-- TEAMS -->
                <div class="card userData" style="overflow:scroll">
                    <h5 style="color: black">Your teams</h5>

                    <?php 

                        //GETTING THE DATA
                        $teams = getTeams(intval($_SESSION['user']['id']), $db);
                        
                        if($teams) {
                            $numTeams = 0;
                            while($team = mysqli_fetch_assoc($teams)){
                                $numTeams++;
                                
                                $teammate = ($team['user1_id'] != intval($_SESSION['user']['id'])) ? getUser($team['user1_id'], $db)['firstname'] : getUser($team['user2_id'], $db)['firstname'];
                                
                                echo 
                                "<div class='card' style='padding: 3%; background-color: lightblue'>
                                    <li><b>Level:</b> $team[level]</li>
                                    <li> <b>Teammate: </b> $teammate </li>
                                    <li> <b>Registration: </b>".(new DateTime($team['registration_date']))->format('d/m/Y')."</li>
                                </div>
                                <br>";
                            };
                        } else {
                            echo 
                            "<p> You do not belong to any team yet</p>";
                        }
                    ?>

                </div>
    
            </div>
    
            <div class="userContainer">
                <!-- LAST MATCHES -->
                <div class="card userData" style="overflow:scroll">
                    <h5 style="color: black">Last matches</h5>
                    <?php
                        //GETTING THE DATA
                        $teams = getTeams(intval($_SESSION['user']['id']), $db);
                        
                        //CHECKING IF THE USER IS ON A TEAM
                        if($teams){ 

                            //GETTING THE MATCHES
                            $matches = getMatches(intval($_SESSION['user']['id']), $db);

                            //CLEANING THE DATA
                            while ($match = mysqli_fetch_assoc($matches)) {
                                if ($match['registration_date'] <= date('Y-m-d H:i:s')) {
                                    //DEFINING USER's TEAM
                                    $team1 = getTeams(intval($_SESSION['user']['id']), $db);
                                    $team1Result = mysqli_fetch_assoc($team1);
                                    //DEFINING TEAMMATE
                                    $teammate = ($team1Result['user1_id'] != intval($_SESSION['user']['id'])) ? getUser($team1Result['user1_id'], $db)['firstname'] : getUser($team1Result['user2_id'], $db)['firstname'];
                                    //CHECKING WHICH TEAM ID IS THE RIVAL ONE AND DEFINE THE VARIABLE
                                    $team2 = ($team1Result['id'] == $match['team1_id']) ? $match['team2_id'] : $match['team1_id'];
                                    $team2QueryResult = mysqli_fetch_assoc(getRival($team2, $db));
                                    $user2 = getUser($team2QueryResult['user1_id'], $db)['firstname'];
                                    $user3 = getUser($team2QueryResult['user2_id'], $db)['firstname'];
                        
                                    echo "
                                    <div class='card' style='padding: 3%; background-color: lightblue'>
                                        <h6> Date:" . (new DateTime($match['registration_date']))->format('d/m/Y H:i:s') . "</h6>
                                        <li><b>Level:</b> " . $match['level'] . "</li>
                                        <li><b>Team 1: </b>" . $_SESSION['user']['firstname']. " - ". $teammate . "</li>
                                        <li><b>Team 2: </b> $user2 - $user3 </li>
                                    </div>
                                    <br>";
                                }
                            }
                        } else {
                            echo "<p>You did not play any games yet.</p>";
                        }
                    ?>
                </div>
                
                <!-- NEXT MATCHES -->
                <div class="card userData" style="overflow:scroll">
                    <h5 style="color: black">Next matches</h5>
                    <?php
                        //GETTING THE DATA
                        $teams = getTeams(intval($_SESSION['user']['id']), $db);

                        if($teams){

                            //GETTING THE MATCHES
                            $matches = getMatches(intval($_SESSION['user']['id']), $db);

                            //CLEANING THE DATA
                            while ($match = mysqli_fetch_assoc($matches)) {
                                if ($match['registration_date'] > date('Y-m-d H:i:s')) {
                                    //DEFINING USER's TEAM
                                    $team1 = getTeams(intval($_SESSION['user']['id']), $db);
                                    $team1Result = mysqli_fetch_assoc($team1);
                                    //DEFINING TEAMMATE
                                    $teammate = ($team1Result['user1_id'] != intval($_SESSION['user']['id'])) ? getUser($team1Result['user1_id'], $db)['firstname'] : getUser($team1Result['user2_id'], $db)['firstname'];
                                    //CHECKING WHICH TEAM ID IS THE RIVAL ONE AND DEFINE THE VARIABLE
                                    $team2 = ($team1Result['id'] == $match['team1_id']) ? $match['team2_id'] : $match['team1_id'];
                                    $team2QueryResult = mysqli_fetch_assoc(getRival($team2, $db));
                                    $user2 = getUser($team2QueryResult['user1_id'], $db)['firstname'];
                                    $user3 = getUser($team2QueryResult['user2_id'], $db)['firstname'];
                        
                                    echo "
                                    <div class='card' style='padding: 3%; background-color: lightblue'>
                                        <h6> Date:" . (new DateTime($match['registration_date']))->format('d/m/Y H:i:s') . "</h6>
                                        <li><b>Level:</b> " . $match['level'] . "</li>
                                        <li><b>Team 1: </b>" . $_SESSION['user']['firstname']. " - ". $teammate . "</li>
                                        <li><b>Team 2: </b> $user2 - $user3 </li>
                                    </div>
                                    <br>";
                                }
                            }
                        } else {
                            echo "<p>You did not play any games yet.</p>";
                        }
                    ?>
                </div>
    
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $("#loginModal").prependTo("body");
                $("#registerModal").prependTo("body");
            });
            </script>
        </div>

        <?php require_once 'includes/editDataForm.php' ?>
    
    </div>

    <!-- FOOTER -->
    <?php require_once 'includes/footer.php';?>

    <div class="card address" >
        <h4>Our address: Padel St, 1 (Barcelona)</h4>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>