<!-- Modal pop-up login -->
<div class="modal fade" id="reservationModal" tabindex="-1" aria-labelledby="reservationModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 50vw">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Hours available</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <!-- BOOTSTRAP TABLE FOR RESERVATIONS -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="tableHead" scope="col">Hour</th>
                        <?php
                        $courts = 8;
                        for($i = 1; $i <= $courts; $i++){
                            echo "<th class='tableHead' scope='col'>Court $i</th>";
                        };
                        ?>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th scope="row" class='tableHead'>9:00-10:30</th>

                        <?php
                            $courts = 8;
                            for($i = 1; $i <= $courts; $i++){
                                $hour = '9:00';
                                $day = '2023-12-31';
                                // $result = getReservation($day, $hour, $db);
                                $random = rand();
                                $available = ($random%2 == 0) ? true : false;
                                
                                if ($available%2 == 0) {
                                    echo "<td class='availableButton'><button class='btn btn-link' data-bs-toggle='modal' data-bs-target='#confirmReservationModal'>Available</button></td>";

                                } else {
                                    echo "<td class='reservedButton'>Reserved</td>";
                                }
                            };
                        ?>                     
                    </tr>
                    <tr>
                        <th scope="row" class='tableHead'>10:30-12:00</th>
                        <?php
                        $courts = 8;
                        for($i = 1; $i <= $courts; $i++){
                            // $hour = '9:00';
                            // $date = '2023-12-31';
                            // $sql = "SELECT * FROM reservations WHERE reservation_date = '$date' AND hour = '$hour';";
                            // $result = $db->query($sql);
                            $random = rand();
                            $available = ($random%2 == 0) ? true : false;
                            
                            if ($available) {
                                echo "<td class='availableButton'><button class='btn btn-link' data-bs-toggle='modal' data-bs-target='#confirmReservationModal'>Available</button></td>";
                            } else {
                                echo "<td class='reservedButton'>Reserved</td>";
                            }
                        };
                        ?>
                    </tr>
                    <tr>
                        <th scope="row" class='tableHead'>12:00-13:30</th>
                        <?php
                        $courts = 8;
                        for($i = 1; $i <= $courts; $i++){
                            // $hour = '9:00';
                            // $date = '2023-12-31';
                            // $sql = "SELECT * FROM reservations WHERE reservation_date = '$date' AND hour = '$hour';";
                            // $result = $db->query($sql);
                            $random = rand();
                            $available = ($random%2 == 0) ? true : false;
                            
                            if ($available) {
                                echo "<td class='availableButton'><button class='btn btn-link' data-bs-toggle='modal' data-bs-target='#confirmReservationModal'>Available</button></td>";
                            } else {
                                echo "<td class='reservedButton'>Reserved</td>";
                            }
                        };
                        ?>
                    </tr>
                    <tr>
                        <th scope="row" class='tableHead'>13:30-15:00</th>
                        <?php
                        $courts = 8;
                        for($i = 1; $i <= $courts; $i++){
                            // $hour = '9:00';
                            // $date = '2023-12-31';
                            // $sql = "SELECT * FROM reservations WHERE reservation_date = '$date' AND hour = '$hour';";
                            // $result = $db->query($sql);
                            $random = rand();
                            $available = ($random%2 == 0) ? true : false;
                            
                            if ($available) {
                                echo "<td class='availableButton'><button class='btn btn-link' data-bs-toggle='modal' data-bs-target='#confirmReservationModal'>Available</button></td>";

                            } else {
                                echo "<td class='reservedButton'>Reserved</td>";
                            }
                        };
                        ?>
                    </tr> <tr>
                        <th scope="row" class='tableHead'>15:00-16:30</th>
                        <?php
                        $courts = 8;
                        for($i = 1; $i <= $courts; $i++){
                            // $hour = '9:00';
                            // $date = '2023-12-31';
                            // $sql = "SELECT * FROM reservations WHERE reservation_date = '$date' AND hour = '$hour';";
                            // $result = $db->query($sql);
                            $random = rand();
                            $available = ($random%2 == 0) ? true : false;
                            
                            if ($available) {
                                echo "<td class='availableButton'><button class='btn btn-link' data-bs-toggle='modal' data-bs-target='#confirmReservationModal'>Available</button></td>";
                            } else {
                                echo "<td class='reservedButton'>Reserved</td>";
                            }
                        };
                        ?>
                    </tr> <tr>
                        <th scope="row" class='tableHead'>16:30-18:00</th>
                        <?php
                        $courts = 8;
                        for($i = 1; $i <= $courts; $i++){
                            // $hour = '9:00';
                            // $date = '2023-12-31';
                            // $sql = "SELECT * FROM reservations WHERE reservation_date = '$date' AND hour = '$hour';";
                            // $result = $db->query($sql);
                            $random = rand();
                            $available = ($random%2 == 0) ? true : false;
                            
                            if ($available) {
                                echo "<td class='availableButton'><button class='btn btn-link' data-bs-toggle='modal' data-bs-target='#confirmReservationModal'>Available</button></td>";
                            } else {
                                echo "<td class='reservedButton'>Reserved</td>";
                            }
                        };
                        ?>
                    </tr> <tr>
                        <th scope="row" class='tableHead'>18:00-19:30</th>
                        <?php
                        $courts = 8;
                        for($i = 1; $i <= $courts; $i++){
                            // $hour = '9:00';
                            // $date = '2023-12-31';
                            // $sql = "SELECT * FROM reservations WHERE reservation_date = '$date' AND hour = '$hour';";
                            // $result = $db->query($sql);
                            $random = rand();
                            $available = ($random%2 == 0) ? true : false;
                            
                            if ($available) {
                                echo "<td class='availableButton'><button class='btn btn-link' data-bs-toggle='modal' data-bs-target='#confirmReservationModal'>Available</button></td>";
                            } else {
                                echo "<td class='reservedButton'>Reserved</td>";
                            }
                        };
                        ?>
                    </tr> <tr>
                        <th scope="row" class='tableHead'>19:30-21:00</th>
                        <?php
                        $courts = 8;
                        for($i = 1; $i <= $courts; $i++){
                            // $hour = '9:00';
                            // $date = '2023-12-31';
                            // $sql = "SELECT * FROM reservations WHERE reservation_date = '$date' AND hour = '$hour';";
                            // $result = $db->query($sql);
                            $random = rand();
                            $available = ($random%2 == 0) ? true : false;
                            
                            if ($available) {
                                echo "<td class='availableButton'><button class='btn btn-link' data-bs-toggle='modal' data-bs-target='#confirmReservationModal'>Available</button></td>";
                            } else {
                                echo "<td class='reservedButton'>Reserved</td>";
                            }
                        }
                        ?>
                    </tr>
                    </tr> <tr>
                        <th scope="row" class='tableHead'>21:00-22:30</th>
                        <?php
                        $courts = 8;
                        for($i = 1; $i <= $courts; $i++){
                            // $hour = '9:00';
                            // $date = '2023-12-31';
                            // $sql = "SELECT * FROM reservations WHERE reservation_date = '$date' AND hour = '$hour';";
                            // $result = $db->query($sql);
                            $random = rand();
                            $available = ($random%2 == 0) ? true : false;
                            
                            if ($available) {
                                echo "<td class='availableButton'><button class='btn btn-link' data-bs-toggle='modal' data-bs-target='#confirmReservationModal'>Available</button></td>";
                            } else {
                                echo "<td class='reservedButton'>Reserved</td>";
                            }
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
