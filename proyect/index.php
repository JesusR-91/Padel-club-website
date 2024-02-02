<!-- MAIN SIDE -->
<?php require_once 'includes/connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padel Club</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"> 


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="background-color: lightblue">

<!-- MAIN IMAGE -->
    <?php require_once 'includes/header.php';?>


    <!-- MAIN BODY -->
    <div id="main">

       <?php require_once 'includes/sidebar.php';?>
       
       <script>
           $(document).ready(function() {
               $("#loginModal").prependTo("body");
               $("#registerModal").prependTo("body");
            });
        </script>


        <!-- CONTENT -->
        <?php require_once 'includes/carousel.php';?>
    </div>
    
    <!-- FOOTER -->
    <?php require_once 'includes/footer.php';?>

    <div class="card address" >
        <h4>Our address: Padel St, 1 (Barcelona)</h4>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>