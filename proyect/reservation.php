<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background-color: lightblue">

<!-- HEADER -->
<?php require_once 'includes/header.php';?>

    <div id="main">
        
        <div>
            
            <div class="dayCardContainer">
                <!-- LOOP TO SHOW THE NEXT 7 DAYS FOR RESERVATIONS-->
                <?php
                $today = date('l');
                for ($i = 0; $i < 7; $i++) {
                    $dayName = date('l', strtotime("+$i day"));
                    $day = date('Y-0-d', strtotime("+$i day"));
                    echo "
                    <div class='card dayCard'> 
                    <button class='btn btn-link' data-bs-toggle='modal' data-bs-target='#reservationModal' style='color:white;text-decoration: none;' >$dayName</button>
                    </div>";
                }
                ?>
                <?php require_once 'includes/reservationTable.php';?>
            </div>
            
            <!-- TO SOLVE A PROBLEM WITH SHOWING THE BOOTSTRAP MODAL -->
            <script>
                $(document).ready(function() {
                    $("#loginModal").prependTo("body");
                    $("#registerModal").prependTo("body");
                    $("#reservationModal").prependTo("body");
                    $("#confirmReservationModal").prependTo("body");
                });
                </script>

</div>

        <!-- INCLUDES -->
        <?php require_once 'includes/sidebar.php';?>
        <?php require_once 'includes/registerForm.php' ?>
        <?php require_once 'includes/confirmReservationModal.php' ?>

    </div>

    <!-- FOOTER -->
    <?php require_once 'includes/footer.php';?>

    <div class="card address" >
        <h4>Our address: Padel St, 1 (Barcelona)</h4>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>