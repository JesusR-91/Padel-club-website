<!-- Modal pop-up login -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Registration</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="register.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="col-form-label">Email</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                    <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'email'): ""; ?>
                </div>
                <div class="mb-3">
                    <label for="password" class="col-form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                    <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'email'): ""; ?>
                </div>
                <div class="mb-3">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" name="firstName">
                    <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'name'): ""; ?>
                </div>

                <div class="mb-3">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" name="lastName">
                    <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'lastName'): ""; ?>
                </div>

                <div class="mb-3">
                    <label for="level" class="form-label">Level (0-7)</label>
                    <input type="number" step="0.1" class="form-control" name="level">
                    <?php echo isset($_SESSION['errors']) ? showErrors($_SESSION['errors'], 'level'): ""; ?>
                </div>
                
                </br>
                <div style="display: flex; justify-content: flex-end; gap:2%">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" <?php echo !isset($_SESSION['errors']) ? "data-bs-dismiss='modal'" : ""; ?>>Register</button>
                </div>
            </form>
        </div>
    </div>
</div>