<!-- HEADER -->
<header id="header">
    <div>
        <div>
            <img id="logo" src="assets/img/main.png" alt="main-img">
        </div>
    
        <?php if(isset($_SESSION['user'])) : ?>
            <div id='welcome'>
                <h5>Welcome, <?= $_SESSION['user']['firstname']?></h5>
            </div>
        <?php endif; ?>
    </div>
</header>