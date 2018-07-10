  <table id="projectTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                                        <thead class="bg-primary-300">
                                                            <tr>
                                                                <th class="text-center">Ticket ID</th>
                                                                <th class="text-center">Vehicle Plate Number</th>
                                                                <th class="text-center">Progress</th>
                                                                <th class="text-center">Status</th>
                                                            </tr>
                                                        </thead>
                                                         <?php 
                                                              $sql = "SELECT * FROM db_trip_ticket WHERE trip_date='$today'";
                                                              $result=mysqli_query($con,$sql);
                                                                 if ($result->num_rows > 0) {
                                                                  while($row = mysqli_fetch_assoc($result)) {
                                                            ?>
                                                        <tbody>
                                                            <tr>
                                                              <td class="text-center"><?php echo $row['ticket_id']; ?></td>
                                                              <td class="text-center"><a href="tripDetails?id=<?php echo $row['ticket_id']; ?>"><?php echo $row['vehicle_id']; ?></a></td>
                                                              <td class="text-center">
                                                                <div class="progress text-left">
                                                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $pb=100; ?>%">
                                                                  <?php echo $pb; ?>% Complete
                                                                </div>
                                                                <i class="fas fa-truck fa-flip-horizontal"></i>
                                                                </div>
                                                              </td>
                                                              <td class="text-center">
                                                                  <?php 
                                                                    if($pb <= 20) {
                                                                        echo "Arrive at Pickup";
                                                                    } else if ($pb <= 35) {
                                                                        echo "Waiting to be loaded";
                                                                    } else if ($pb <= 55) {
                                                                        echo "Loaded";
                                                                    } else if ($pb <= 75) {
                                                                        echo "Start Trip to Client";
                                                                    } else if ($pb = 85) {
                                                                        echo "Delivered";
                                                                    } else if ($pb = 95) {
                                                                        echo "Back to garage";
                                                                    } else if ($pb = 100) {
                                                                        echo "Garage";
                                                                    }
                                                                  ?>
                                                              </td>
                                                            </tr>
                                                        </tbody>
                                                            <?php  } } ; ?>
                                                        <tfoot class="bg-primary-300">
                                                          <tr>
                                                              <th class="text-center">Ticketn ID</th>
                                                              <th class="text-center">Plate Number </th>
                                                              <th class="text-center">Progress</th>
                                                              <th class="text-center">Status</th>
                                                          </tr>
                                                        </tfoot>
                                                    </table>