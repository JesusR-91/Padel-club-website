<!-- Modal pop-up Confirm Reservation -->
<div class="modal fade" id="confirmReservationModal" tabindex="-1" aria-labelledby="confirmReservationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Confirm reservation</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <h6>You want to confirm the reservation for this day?</h6>

                    <div style="display: flex; justify-content: flex-end; gap:2%">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>