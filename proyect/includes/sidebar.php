 <!-- SIDEBAR -->
 <ul class="nav flex-column sidebar">
    <!-- HOME -->
    <li class="nav-item">
        <a class="nav-link" href="index.php"><img class="navbarLogo" src="assets/img/home.png" alt="home"></a>
    </li>
    <!-- USER -->
    <li class="nav-item">
        <?php if(isset($_SESSION['user'])) :?>
            <a href="user.php"><img class="navbarLogo" src="assets/img/user.png" alt="user"></a>
        <?php else : ?>
            <img class="navbarLogo" src="assets/img/user.png" alt="user" data-bs-toggle="modal" data-bs-target="#loginModal">

            <?php require_once 'includes/loginForm.php' ?>
        <?php endif ?>
    </li>
    
    <!-- RESERVATIONS -->
    <li class="nav-item">
        <a class="nav-link" href="reservation.php"><img class="navbarLogo" src="assets/img/reservation.png" alt="reservation"></a>
    </li>

    <!-- LOGOUT -->
    <li class="nav-item">
        <a class="nav-link" href="logout.php"><img class="navbarLogo" src="assets/img/logout.png" alt="logout"></a>
    </li>

    <?php require_once 'includes/registerForm.php' ?>

</ul>