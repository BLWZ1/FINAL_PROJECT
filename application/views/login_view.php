<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> Hotel Booking - Login </title>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <section class="login-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="login-wrapper login-shadow bg-white">
                <div class="login-wrapper-flex">
                    <div class="login-wrapper-thumb">
                        <img style="height:650px;" src="assets/img/l1.jpg" alt="img">
                    </div>
                    <div class="login-wrapper-contents login-padding">
                        
                        <h2 class="single-title"> Welcome! </h2>
                        </hr>
                        <p class="sigle-para mt-2"> Login to Continue the journey</p>
                        <?php
                            if (isset($message)) { ?>
                            <p class="sigle-para mt-2 text-danger "> <?php echo $message; ?></p>
                         <?php        
                            }
                        ?>
                        <form class="login-wrapper-contents-form custom-form" action="#" method ="POST">
                            <div class="single-input mt-4">
                           
                                <label class="label-title mb-3" > Email Or User Name </label>
                                <input class="form--control" type="text" name="email"placeholder="Enter your email or username" require>
                                
                            </div>
                            <div class="single-input mt-4">
                                <label class="label-title mb-3 label-primary"> Password </label>
                                <input class="form--control" type="password" name="password" placeholder="Enter your password"require>
                                <div class="icon toggle-password">
                                    <div class="show-icon"> <i class="las la-eye-slash"></i> </div>
                                    <span class="hide-icon"> <i class="las la-eye"></i> </span>
                                </div>
                            </div>
                            <button class="submit-btn w-100 mt-4" type="submit" value="submit" name = "submit"> Login </button>
                            <span class="account color-light mt-3"> Don't have an account? <a class="color-one"
                                    href="/register"> Register here </a> </span>
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