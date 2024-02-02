<!-- Modal pop-up for edit data in user profile -->
<div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="editDataModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit your user information</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <form action="edit.php" method="POST">
                <div class="mb-3">
                    <label id="email" for="email" class="col-form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?= $_SESSION['user']['email'];?>">
                </div>

                <div class="mb-3">
                    <label for="firstName" class="col-form-label">First name</label>
                    <input type="text" class="form-control" name="firstName" value="<?= $_SESSION['user']['firstname'];?>">
                </div>
                <div class="mb-3">
                    <label for="lastName" class="col-form-label">Last Name</label>
                    <input type="text" class="form-control" name="lastName" value="<?= $_SESSION['user']['lastname'];?>">
                </div>
                <div class="mb-3">
                    <label for="level" class="col-form-label">Level</label>
                    <input type="number" step="0.1" class="form-control" name="level" value="<?= $_SESSION['user']['level'];?>">
                </div>


                <div style="display: flex; justify-content: flex-end; gap:2%">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>