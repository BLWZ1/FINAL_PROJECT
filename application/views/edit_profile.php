<div class="breadcrumb-area breadcrumb-padding">
  <div class="container custom-container-one">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-contents">
          <h4 class="breadcrumb-contents-title"> Edit Profile </h4>
          <ul class="breadcrumb-contents-list list-style-none">
            <li class="breadcrumb-contents-list-item"> <a href="/" class="breadcrumb-contents-list-item-link"> Home </a>
            </li>
            <li class="breadcrumb-contents-list-item"> <a href="/profile" class="breadcrumb-contents-list-item-link">
                Profile </a> </li>
            <li class="breadcrumb-contents-list-item"> <a href="/edit_profile"
                class="breadcrumb-contents-list-item-link"> Edit Profile </a> </li>
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
                  <li class="list"> <a href="/profile"> Profile </a> </li>
                  <li class="list selected"> <a href="/edit_profile"> Edit Profile </a> </li>
                  <li class="list"> <a href="/changepassword"> Password Change </a> </li>
                </ul>
              </li>


            </ul>
          </div>
        </div>
      </div>
      <div class="dashboard-right-contents mt-4 mt-lg-0">
        <div class="dashboard-reservation">
          <div class="single-reservation bg-white base-padding">
            <h3 class="single-reservation-title text-center"> Edit Profile </h3>
            <div class="custom--form dashboard-form">
              <form action="" method="POST">

                <div class="dashboard-flex-input">
                  <div class="dashboard-input mt-4">

                    <label class="label-title"> Name </label>

                    <input type="text" class="form--control" name="name" value="<?php echo $user->customerName; ?> ">
                  </div>

                </div>
                <div class="dashboard-flex-input">
                  <div class="dashboard-input mt-4">
                    <label class="label-title"> Address </label>
                    <input type="text" class="form--control" name="address" value="<?php echo $user->address;?>">
                  </div>
                </div>
                <div class="dashboard-flex-input flex-input-3">

                </div>
                <div class="dashboard-flex-input">
                  <div class="dashboard-input mt-4">
                    <label class="label-title"> Email </label>
                    <input type="text" class="form--control" name="email" value="<?php echo $user->email;?> " disable>
                  </div>
                </div>
                <div class="dashboard-flex-input">
                  <div class="dashboard-input mt-4">
                    <label class="label-title"> Phone Number </label>
                    <input type="text" class="form--control" name="phone" id="phone" value="<?php echo $user->phone;?>">
                  </div>
                </div>
                <div class="dashboard-flex-input">
                  <div class="dashboard-input mt-4">
                    <label class="label-title"> Passport </label>
                    <input type="text" class="form--control" name="passport" value="<?php echo $user->passport;?>">
                  </div>
                </div>
                <div class="btn-wrapper mt-4 text-center">
                  <button class="cmn-btn btn-bg-1 text-center" type="submit " value="Submit" name="submit"> Submit
                  </button>
                </div>
                <?php
                              if (isset($message)) { ?>
                <p class="sigle-para mt-2 text-danger ">
                  <?php echo $message; ?>
                </p>
                <?php        
                              }
                          ?>
              </form>
            </div>
          </div>
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