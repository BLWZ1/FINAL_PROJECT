<div class="breadcrumb-area breadcrumb-padding">
  <div class="container custom-container-one">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-contents">
          <h4 class="breadcrumb-contents-title"> Profile Details </h4>
          <ul class="breadcrumb-contents-list list-style-none">
            <li class="breadcrumb-contents-list-item"> <a href="/" class="breadcrumb-contents-list-item-link"> Home </a>
            </li>
            <li class="breadcrumb-contents-list-item"> Profile </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="body-overlay"></div>
<div class="dashboard-area section-bg-2 dashboard-padding">
  <div class="container">
    <div class="dashboard-contents-wrapper">
      <div class="dashboard-icon">
        <div class="sidebar-icon">
          <i class="las la-bars"></i>
        </div>
      </div>
      <div class="dashboard-left-content">
        <div class="dashboard-close-main">
          <div class="close-bars"> <i class="las la-times"></i> </div>
          <div class="dashboard-bottom">
            <ul class="dashboard-list list-style-none">



              <li class="list has-children active open show">
                <a href="javascript:void(0)"> <i class="las la-user-circle"></i> Profile </a>
                <ul class="submenu list-style-none">
                  <li class="list selected"> <a href="dashboard_profile.html"> Profile </a> </li>
                  <li class="list"> <a href="/list_booking"> List Booking </a> </li>
                  <li class="list"> <a href="/edit_profile"> Edit Profile </a> </li>
                  <li class="list"> <a href="changpassword.php"> Password Change </a> </li>
                </ul>
              </li>


            </ul>
          </div>
        </div>
      </div>
      
      <div class="dashboard-right-contents mt-4 mt-lg-0">
        <div class="dashboard-reservation">
          <div class="single-reservation bg-white base-padding">
            <div class="table-responsive">
                <table class="table table-hover" id="datatable">
                  <thead>
                    <tr>
                      
                      <th>Name User</th>
                      <th>Phone</th>
                      <th>Room Id</th>
                      <th>Checkin</th>
                      <th>Checkout</th>
                      <th>Person</th>
                      <th>Children</th>
                      <th>Surcharge</th>
                      <th>Status</th>
                      <th>Create On</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if($listBookings){ 
                      foreach($listBookings as $row){  
                        //tien phu phi
                        $amountOther = 100;
                        $amountPerSion = 0;
                        if($row->personNumber > 2){
                            //tinh tien nguoi lon khi lon hon 2 ng;
                            $amountPerSion = ($row->personNumber - 2) * $amountOther;
                        }
                        $amountChildren = 0;
                        if($row->childNumber > 1){
                            $amountChildren = ($row->childNumber - 1) * $amountOther;
                        }
                        $totalAmountSur = $amountPerSion + $amountChildren;
                    ?>
                    <tr>
                      
                      <td><?=$row->customerName?></td>
                      <td><?=$row->phone?></td>
                      <td><?=$row->roomId?></td>
                      <td><?=$row->checkinDate?></td>
                      <td><?=$row->checkoutDate?></td>
                      <td><?=$row->personNumber?></td>
                      <td><?=$row->childNumber?></td>
                      <td>$<?=number_format($totalAmountSur, 2)?></td>
                      <td><?=$row->status?></td>
                      <td><?=date('H:i d-m-Y', strtotime($row->createOn))?></td>
                    </tr>
                    <?php }} ?>
                  </tbody>
                </table>
              </div>

          </div>

        </div>
        <div>
            
        </div>

      </div>
      
      
    </div>
  </div>
</div>




<div class="popup-overlay"></div>
<div class="popup-fixed">
  <div class="popup-contents popup-cancell-modal">
    <h2 class="popup-contents-title"> Why do you want to cancel? </h2>
    <div class="popup-contents-select">
      <label class="popup-contents-select-label"> Choose a reason </label>
      <div class="js-select">
        <select>
          <option value="1">Don't want to Book</option>
          <option value="2">Booked Accidentally</option>
          <option value="3">Don't want to Book</option>
        </select>
      </div>
    </div>
    <div class="popup-contents-btn flex-btn">
      <a href="javascript:void(0)" class="dash-btn popup-close"> <i class="las la-arrow-left"></i> Go Back </a>
      <a href="javascript:void(0)" class="dash-btn btn-cancelled popup-close"> Cancel </a>
    </div>
  </div>
</div>