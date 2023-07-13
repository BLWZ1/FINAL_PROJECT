<div class="breadcrumb-area breadcrumb-padding">
  <div class="container custom-container-one">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-contents">
          <h4 class="breadcrumb-contents-title"> Change Password </h4>
          <ul class="breadcrumb-contents-list list-style-none">
            <li class="breadcrumb-contents-list-item"> <a href="/" class="breadcrumb-contents-list-item-link"> Home </a>
            </li>
            <li class="breadcrumb-contents-list-item"> <a href="/profile" class="breadcrumb-contents-list-item-link">
                Profile </a> </li>
            <li class="breadcrumb-contents-list-item"><a href="/changepassword"
                class="breadcrumb-contents-list-item-link"> Change Password</a> </li>
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
                  <li class="list"> <a href="/edit_profile"> Edit Profile </a> </li>
                  <li class="list selected"> <a href="/changepassword"> Password Change </a> </li>
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </div>
      <div class="dashboard-right-contents mt-4 mt-lg-0">
        <div class="dashboard-reservation">
          <div class="single-reservation bg-white base-padding">

            <h3 class="single-reservation-title text-center"> Change Password </h3>
            <div class="custom--form dashboard-form">
              <form action="" method="POST">
                <div class="dashboard-input mt-4">
                  <label class="label-title"> Current Password </label>
                  <input type="password" name="password" class="form--control">
                </div>
                <div class="dashboard-input mt-4">
                  <label class="label-title"> New Password </label>
                  <input type="password" class="form--control" name="newpassword">
                </div>
                <div class="dashboard-input mt-4">
                  <label class="label-title"> Confirm Password </label>
                  <input type="password" class="form--control" name="cfnewpassword">
                </div>
                <div class="dashboard-checkbox-wrapper text-center">
                  
                    <?php 
                                      
                                      if(isset($message)){
                                          echo $message;
                                      }
                                  ?>
                    <div class="btn-wrapper mt-4">
                      <button class="cmn-btn btn-bg-1 text-center" type="submit" name="submit" value="submit">Change
                        password</button>
                    </div>

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

</div>

</div>
</div>