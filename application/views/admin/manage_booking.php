
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">

           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Manage Booking</h4>
                  <p class="card-description">
                    <button class="btn btn-primary">Add</button>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-hover" id="datatable">
                      <thead>
                        <tr>
                          <th>Booking Id</th>
                          <th>Name User</th>
                          <th>Phone</th>
                          <th>Room Id</th>
                          <th>Checkin</th>
                          <th>Checkout</th>
                          <th>Adult</th>
                          <th>Children</th>
                          <!-- <th>Price/Night</th> -->
                          <th>Surcharge</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php if($listBookings){ 
                          foreach($listBookings as $row){  
                            //tien phu phi
                            $amountOther = 20;
                            $amountPerson = 0;
                            if($row->personNumber > 2){
                                //tinh tien nguoi lon khi lon hon 2 ng;
                                $amountPerson = ($row->personNumber - 2) * $amountOther;
                            }
                            $amountChildren = 0;
                            if($row->childNumber > 1){
                                $amountChildren = ($row->childNumber - 1) * $amountOther;
                            }
                            $totalAmountSur = $amountPerson + $amountChildren;
                        ?>
                        <tr>
                          <td><?=$row->bookingId?></td>
                          <td><?=$row->customerName?></td>
                          <td><?=$row->phone?></td>
                          <td><?=$row->roomId?></td>
                          <td><?=$row->checkinDate?></td>
                          <td><?=$row->checkoutDate?></td>
                          <td><?=$row->personNumber?></td>
                          <td><?=$row->childNumber?></td>
                          <!-- <td>$<?=number_format($row->childNumber, 2)?></td> -->
                          <td>$<?=number_format($totalAmountSur, 2)?></td>
                          <td>
                            <?php if($row->status== 'Pending'){?>
                              <button class="btn btn-xs btn-warning">Pending</button>
                            <?php } elseif ($row->status== 'Confirm') { ?>
                              <button class="btn btn-xs btn-primary">Confirm</button>
                            <?php
                            }else { ?>
                              <button class="btn btn-xs btn-danger">Cancel</button>
                              <?php 
                              }
                            
                            ?>
                          </td>
                          <td>
                            <?php if($row->status == 'Pending'){ ?>
                            <a href="/admin/confirm_booking/<?=$row->bookingId?>" class="btn btn-xs btn-primary">Confirm</a>
                            <a href="/admin/cancel_booking/<?=$row->bookingId?>" class="btn btn-xs btn-danger">Cancel</a>
                            <?php } ?>
                          </td>
                        </tr>
                        <?php }} ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>