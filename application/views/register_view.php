<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  </title>

    <link rel=icon href="favicon.png" sizes="16x16" type="icon/png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/line-awesome.min.css">

    <link rel="stylesheet" href="assets/css/animate.css">

    <link rel="stylesheet" href="assets/css/slick.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/flatpicker.css">

    <link rel="stylesheet" href="assets/css/intlTelInput.css">

    <link rel="stylesheet" href="assets/css/nice-select.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <section class="l-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">
                    <div class="login-wrapper-thumb">
                        <img style="height:750px;" src="assets/img/blogs/register.jpg" alt="img">
                    </div>
                    <div class="login-wrapper-contents login-padding">
                        <h2 class="single-title text-center"> Register </h2>
                        <?php
                            if (isset($message)) { ?>
                            <p class="sigle-para mt-2 text-danger "> <?php echo $message; ?></p>
                         <?php        
                            }
                        ?>
                        <form class="login-wrapper-form custom-form padding-top-20" action="#" method="POST">
                        <div class="input-flex-item"> 
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Full Name </label>
                                <input class="form--control" type="text" name = "name" placeholder="Enter Full Name">
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Email  </label>
                                <input class="form--control" type="text" name="email" placeholder="Enter your email">
                            </div>
                        </div>
                        <div class="input-flex-item"> 
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Phone Number </label>
                                <input class="form--control" type="tel" id="phone" name="phone"
                                    placeholder="Enter your phone">
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Passport </label>
                                <input class="form--control" type="number"  name="passport"
                                    placeholder="Enter your phone">
                            </div>
                        </div>
                           
                            
                            <div class="single-input mt-4">
                                <label class="label-title mb-3"> Address  </label>
                                <input class="form--control" type="text"  name="address"
                                    placeholder="Enter your address">
                            </div>
                            
                            <div class="input-flex-item">
                                <div class="single-input mt-4">
                                    <label class="label-title mb-3"> Password </label>
                                    <input class="form--control" type="password" name="password"
                                        placeholder="Enter your Password">
                                    <div class="icon toggle-password">
                                        <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                        <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                    </div>
                                </div>
                                <div class="single-input mt-4">
                                    <label class="label-title mb-3"> Confirm Password </label>
                                    <input class="form--control" type="password" name="cfpassword"
                                        placeholder="Confirm Password">
                                    <div class="icon toggle-password">
                                        <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                        <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="checkbox-inline mt-4">
                                <input class="check-input" type="checkbox" name="checkbox" value ="1">
                                <label class="checkbox-label" for="check15"> By creating an account, you agree to the <a
                                        class="color-one" href="/term"> Terms of service </a> ,
                                    and <a class="color-one" href="/privacy"> privacy policy </a> </label>
                            </div>
                            <button class="submit-btn w-100 mt-4" type="submit" value="submit" name="submit"> Register </button>
                               
                            <span class="account color-light mt-3"> Already have an account? <a class="color-one"
                                    href="/login"> Login </a> </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="mouse-move mouse-outer"></div>
    <div class="mouse-move mouse-inner"></div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/jquery-migrate.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/wow.js"></script>

    <script src="assets/js/slick.js"></script>

    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <script src="assets/js/isotope.pkgd.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.js"></script>

    <script src="assets/js/jquery.nice-select.js"></script>

    <script src="assets/js/flatpicker.js"></script>

    <script src="assets/js/nouislider-8.5.1.min.js"></script>

    <script src="assets/js/intlTelInput.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>