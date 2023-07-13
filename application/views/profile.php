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
            <div class="single-reservation-flex mb-4">
              <div class="single-reservation-author">
                <div class="single-reservation-author-flex">
                  <div class="single-reservation-author-thumb">
                    <img src="assets/img/avatar.jpg" alt="img">
                  </div>
                  <div class="single-reservation-author-contents">

                    <h5 class="single-reservation-author-contents-title"> User name:
                      <?php echo $user->customerName;?>
                    </h5>
                    <p class="single-reservation-author-contents-para"> Passport:
                      <?php echo $user->passport ?>
                    </p>
                  </div>
                </div>
              </div>

            </div>
            <div class="single-reservation-item">
              <div class="single-reservation-contact">
                <div class="single-reservation-contact-item">
                  <span class="single-reservation-contact-list"> <span> <i class="las la-map-marker-alt"></i> </span>
                    <?php echo $user->address ?>
                  </span>
                </div>
                <div class="single-reservation-contact-item">
                  <a href="email: <?php echo $user->email; ?>" class="single-reservation-contact-list"> <span> <i
                        class="las la-envelope"></i> </span> <span>
                      <?php echo $user->email; ?>
                    </span> </a>
                </div>
                <div class="single-reservation-contact-item">
                  <a href="tel:(208)5550112" class="single-reservation-contact-list"> <span> <i
                        class="las la-phone-alt"></i> </span>
                    <?php echo $user->phone ?>
                  </a>
                </div>

              </div>
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