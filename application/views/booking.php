<div class="breadcrumb-area breadcrumb-padding">
    <div class="container custom-container-one">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-contents">
                    <h4 class="breadcrumb-contents-title"> Room Detail </h4>
                    <ul class="breadcrumb-contents-list list-style-none">
                        <li class="breadcrumb-contents-list-item"> <a href="index.html"
                                class="breadcrumb-contents-list-item-link"> Home </a> </li>
                        <li class="breadcrumb-contents-list-item"> <a href="listing.html"
                                class="breadcrumb-contents-list-item-link"> Room </a> </li>
                        <li class="breadcrumb-contents-list-item"> Room Detail </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="hotel-details-area section-bg-2 pat-100 pab-100">
   <?php 
    $img = explode("|",$room->image);
    
   
   ?>
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-8 col-lg-7">
                <div class="details-left-wrapper">
                    <div class="details-contents bg-white radius-10">
                        <div class="details-contents-header">
                             
                            <div class="details-contents-thumb details-contents-main-thumb bg-image"
                                style="background-image: url(<?php echo $img[0]; ?>);">
                            </div>
                            <div class="details-contents-header-flex">
                            <?php
                            
                            for($i = 1; $i < count($img); $i++)
                                {
                                                                       
                             ?> 
                                <div class="details-contents-header-thumb">
                                    <img src="<?php echo $img[$i]; ?>" alt="img">
                                </div>
                                
                        
                        <?php
                    }  
                    ?>
                        </div>
                        </div>
                        <div class="hotel-view-contents">
                            <div class="hotel-view-contents-header">
                                <span class="hotel-view-contents-review"> <i class="las la-star"></i> 4.5 <span
                                        class="hotel-view-contents-review-count"> (380) </span> </span>
                                <h3 class="hotel-view-contents-title"> <?php echo $room->roomName; ?> </h3>
                                <div class="hotel-view-contents-location mt-2">
                                    <span class="hotel-view-contents-location-icon">  </span>
                                    <span class="hotel-view-contents-location-para">Description: <?php echo $room->title; ?> </span>
                                </div>
                            </div>
                            <div class="hotel-view-contents-middle">
                                <div class="hotel-view-contents-flex">
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-parking"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Parking </p>
                                    </div>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-wifi"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Wifi </p>
                                    </div>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-coffee"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Breakfast </p>
                                    </div>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-quidditch"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Room Service </p>
                                    </div>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-swimming-pool"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Pool </p>
                                    </div>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-receipt"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Reception </p>
                                    </div>
                                    <div class="hotel-view-contents-icon d-flex gap-1">
                                        <span> <i class="las la-dumbbell"></i> </span>
                                        <p class="hotel-view-contents-icon-title flex-fill"> Gym </p>
                                    </div>
                                </div>
                            </div>
                            <div class="hotel-view-contents-bottom">
                                <div class="hotel-view-contents-bottom-flex">
                                    <div class="hotel-view-contents-bottom-contents">
                                        <h4 class="hotel-view-contents-bottom-title"> <?php echo $room->price; ?> <sub>/Night</sub> </h4>
                                        <p class="hotel-view-contents-bottom-para">Status room:  <?php echo $room->statusRoom; ?> </p>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="javascript:void(0)" class="cmn-btn btn-bg-1 btn-small"> Reserve Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="details-contents-tab">
                            <ul class="tabs details-tab details-tab-border">
                                <li class="active" data-tab="about"> About </li>
                                <li data-tab="reviews"> Reviews </li>
                            </ul>
                            <div id="about" class="tab-content-item active">
                                <div class="about-tab-contents">
                                    <p class="about-tab-contents-para"> One morning, when Gregor Samsa woke from
                                        troubled dreams, he found himself transformed in his bed into a horrible vermin.
                                        He lay on his armour-like back. </p>
                                    <p class="about-tab-contents-para mt-4"> He lifted his head a little he could see
                                        his brown belly, slightly domed and divided by arches into stiff sections. The
                                        bedding was hardly able to cover it and seemed ready to slide off any moment.
                                        His many legs,
                                        pitifully thin compared with the size of the rest of him. </p>
                                    <p class="about-tab-contents-para mt-4">
                                        So many legs pitifully thin compared with the size of the rest of him waved
                                        about helplessly as he looked What's happened to me. </p>
                                </div>
                            </div>
                            <div id="reviews" class="tab-content-item">
                                <div class="review-tab-contents">
                                    <div class="review-tab-contents-single">
                                        <div class="rating-wrap">
                                            <div class="ratings">
                                                <span class="hide-rating"></span>
                                                <span class="show-rating"></span>
                                            </div>
                                            <p> <span class="total-ratings">(167)</span></p>
                                        </div>
                                        <p class="about-review-para mt-3"> This is place to healing and make some peace for love . love you  </p>
                                        <div class="review-tab-contents-author mt-4">
                                            <h4 class="review-tab-contents-author-name"> Sandra M. Hurt </h4>
                                            <p class="review-tab-contents-author-para mt-2"> Very good </p>
                                        </div>
                                    </div>
                                    <div class="review-tab-contents-single">
                                        <div class="rating-wrap">
                                            <div class="ratings">
                                                <span class="hide-rating"></span>
                                                <span class="show-rating"></span>
                                            </div>
                                            <p> <span class="total-ratings">(236)</span></p>
                                        </div>
                                        <p class="about-review-para mt-3"> So good to one journey 3 days for Ha Giang, amazing good job . </p>
                                        <div class="review-tab-contents-author mt-4">
                                            <h4 class="review-tab-contents-author-name"> Robert Fox </h4>
                                            <p class="review-tab-contents-author-para mt-2"> Designer </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php
                if(isset($status) && isset($message)){
                    echo "<script>alert('".$message."')</script>";
                }
            ?>
            <div class="col-xl-4 col-lg-5">
                <div class="sticky-top">
                    <div class="hotel-details-widget hotel-details-widget-padding widget bg-white radius-10">
                        <div class="details-sidebar">
                            <div class="details-sidebar-dropdown custom-form">
                                <h2> Booking Now </h2>
                                <form action="" method="POST">
                                    <div class="single-input">
                                        <label class="details-sidebar-dropdown-title"> Check In </label>
                                        <input class="form--control date-picker" type="text" name="checkin" required>
                                    </div>
                                    <div class="single-input mt-3">
                                        <label class="details-sidebar-dropdown-title"> Check Out </label>
                                        <input class="form--control date-picker" type="text" name="checkout" required>
                                    </div>
                                    <div class="single-input mt-3">
                                        <label class="details-sidebar-dropdown-title"> Adult </label>
                                        <input class="form--control" type="number" placeholder="1"name="person" value="1" required>
                                    </div>
                                    <div class="single-input mt-3">
                                        <label class="details-sidebar-dropdown-title"> Children </label>
                                        <input class="form--control" type="number" placeholder="1" name="children" value="1" required>
                                    </div>
                                    <div class="btn-wrapper mt-4 text-center">
                                
                                <button  class="cmn-btn btn-bg-1 btn-small" type="submit" name="submit"value="submit">Submit</button>
                            </div>
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                    <?php if ($type == "") {
                        
                     ?>

                    <h2> the room relate not available </h2>
                    <?php
                    }
                    else {
                        foreach($type as $key => $value){
                            $img = explode("|",$value->image);

                            ?>
                            <div class="hotel-details-widget widget bg-white radius-10">
                        <div class="hotel-view">
                            <h2 class="text-center">Room related </h2>
                            <a href="/booking/<?php echo $value->roomId; ?>" class="hotel-view-thumb hotel-view-grid-thumb bg-image"
                                style="background-image: url(<?php echo $img[0]; ?>);">
                        </a>
                            <div class="hotel-view-contents">
                                <div class="hotel-view-contents-header">
                                    <span class="hotel-view-contents-review"> <i class="las la-star"></i> 4.5 <span
                                            class="hotel-view-contents-review-count"> (380) </span> </span>
                                    <h3 class="hotel-view-contents-title"><?php echo $value->roomName; ?> </h3>
                                    <div class="hotel-view-contents-location mt-2">
                                        <span class="hotel-view-contents-location-icon">  </span>
                                        <span class="hotel-view-contents-location-para">Type of Room: <?php echo $value->kindRoom; ?> </span>
                                    </div>
                                </div>
                                <div class="hotel-view-contents-middle">
                                    <div class="hotel-view-contents-flex">
                                        <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Car Parking">
                                            <i class="las la-parking"></i>
                                        </div>
                                        <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Free Wifi">
                                            <i class="las la-wifi"></i>
                                        </div>
                                        <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Free Breakfast">
                                            <i class="las la-coffee"></i>
                                        </div>
                                        <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Home Service">
                                            <i class="las la-quidditch"></i>
                                        </div>
                                        <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Swimming Pool">
                                            <i class="las la-swimming-pool"></i>
                                        </div>
                                        <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Reception">
                                            <i class="las la-receipt"></i>
                                        </div>
                                        <div class="hotel-view-contents-icon myTooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Gym">
                                            <i class="las la-dumbbell"></i>
                                        </div>
                                        <div class="hotel-view-contents-icon">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="hotel-view-contents-bottom">
                                    <div class="hotel-view-contents-bottom-flex">
                                        <div class="hotel-view-contents-bottom-contents">
                                            <h4 class="hotel-view-contents-bottom-title"><?php echo $value->price; ?> <sub>/Night</sub> </h4>
                                            <p class="hotel-view-contents-bottom-para"> <?php echo $value->title    ; ?>
                                            </p>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="javascript:void(0)" class="cmn-btn btn-bg-1 btn-small"> Reserve Now
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                        }
                    }
                    ?> 
                    
                </div>
            </div>
        </div>
    </div>
</section>