<div class="breadcrumb-area section-bg-2 breadcrumb-padding">
    <div class="container custom-container-one">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-contents">
                    <h4 class="breadcrumb-contents-title"> Room List </h4>
                    <ul class="breadcrumb-contents-list list-style-none">
                        <li class="breadcrumb-contents-list-item"> <a href="home"
                                class="breadcrumb-contents-list-item-link"> Home </a> </li>
                        <li class="breadcrumb-contents-list-item"> Room List </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="responsive-overlay"></div>
<section class="hotel-list-area section-bg-2 pat-20 pab-100">
    <div class="container">
        <div class="shop-contents-wrapper mt-5">
            <div class="shop-icon">
                <div class="shop-icon-sidebar">
                    <i class="las la-bars"></i>
                </div>
            </div>
           
            <div class="shop-grid-contents">
                <div class="grid-list-contents flex-end " >
                    <div class="grid-list-contents-flex ">
                        
                        <div class="grid-list-view ">
                            <ul class="grid-list-view-flex d-flex tabs list-style-none">
                                <li class="grid-list-view-icons active" data-tab="tab-grid">
                                    <a href="javascript:void(0)" class="icon"> <i class="las la-border-all"></i> </a>
                                </li>
                                <li class="grid-list-view-icons" data-tab="tab-list">
                                    <a href="javascript:void(0)" class="icon"> <i class="las la-bars"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div id="tab-grid" class="tab-content-item active mt-4">
                
                    <div class="row gy-4">
                    <?php 
                if ($room =="") {
                    
                ?>
                <h1> the room not available </h1>
                <?php
                }
                else{

                foreach ($room as $key => $value) 
                {
                    $img = explode("|",$value->image);
                    ?>

                <div class="col-md-4">
                            <div class="hotel-view bg-white radius-20">
                                
                                <a  href="/booking/<?php echo $value->roomId; ?>" class="hotel-view-thumb hotel-view-grid-thumb bg-image"
                                    style="background-image: url(<?php echo $img[0]; ?>);">
                                </a>
                                <div class="hotel-view-contents">
                                    <div class="hotel-view-contents-header">
                                        <span class="hotel-view-contents-review"> <i class="las la-star"></i> 4.5 <span
                                                class="hotel-view-contents-review-count"> (380) </span> </span>
                                        <h3 class="hotel-view-contents-title"> <a href="hotel_details.html"> <?php echo $value->roomName; ?> </a> </h3>
                                        <div class="hotel-view-contents-location mt-2">
                                            <span class="hotel-view-contents-location-icon"></span>
                                            <span class="hotel-view-contents-location-para">Type of Rooms: <?php echo $value->kindRoom; ?> </span>
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
                                            
                                        </div>
                                    </div>
                                    <div class="hotel-view-contents-bottom">
                                        <div class="hotel-view-contents-bottom-flex">
                                            <div class="hotel-view-contents-bottom-contents">
                                                <h4 class="hotel-view-contents-bottom-title"> $ <?php echo $value->price ?> <sub>/Night</sub>
                                                </h4>
                                            <?php if ($value->statusRoom == 'available') { ?> 
                                            <p class="hotel-view-contents-bottom-para text-success"> <?php echo $value->statusRoom; ?> 
                                            </p>
                                            <?php }
                                            else{
                                                ?>
                                             <p class="hotel-view-contents-bottom-para text-danger"> <?php echo $value->statusRoom; ?> 

                                                <?php

                                            }
                                            ?>
                                            </div>
                                            <div class="btn-wrapper">
                                                <a href="/booking/<?php echo $value->roomId; ?>" class="cmn-btn btn-bg-1 btn-small"> Booking
                                                    Now </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php



                };
            }
                    ?>
                    
     
                    </div>
                    
                </div>
                <div id="tab-list" class="tab-content-item mt-4">
                    <div class="row gy-4">
                        <?PHP
                        if ($room == "") {
                            # code...
                        
                        ?>

                        <h1> the room not available </h1>
                        <?php
                        } 
                        else
                        {
                            foreach ($room as $key => $value) 
                            {
                                $img = explode("|",$value->image);
                                ?>
                           
                    

                        <div class="col-12">
                            <div class="hotel-view bg-white radius-20">
                                <div class="hotel-view-flex">
                                    <a href="hotel_details.html" class="hotel-view-thumb hotel-view-list-thumb bg-image"
                                        style="background-image: url(<?php echo $img[0]; ?>);">
                                    </a>
                                    <div class="hotel-view-contents">
                                        <div class="hotel-view-contents-header">
                                            <div
                                                class="hotel-view-contents-header-flex d-flex flex-wrap gap-3 align-items-center justify-content-between">
                                                <span class="hotel-view-contents-review"> <i class="las la-star"></i>
                                                    4.5 <span class="hotel-view-contents-review-count"> (380) </span>
                                                </span>
                                                <div class="btn-wrapper">
                                                    <a href="javascript:void(0)" class="cmn-btn btn-bg-1 btn-small">
                                                        Reserve Now </a>
                                                </div>
                                            </div>
                                            <h3 class="hotel-view-contents-title"> <a href="hotel_details.html"> <?php echo $value->roomName; ?> </a> </h3>
                                            <div class="hotel-view-contents-location mt-2">
                                                <span class="hotel-view-contents-location-icon"> <i
                                                        class="las la-map-marker-alt"></i> </span>
                                                <span class="hotel-view-contents-location-para"> 4140 Parker Rd.
                                                    Allentown, New Mexico 31134 </span>
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
                                                    <p class="hotel-view-contents-icon-title flex-fill"> Room Service
                                                    </p>
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
                                                <div
                                                    class="hotel-view-contents-bottom-contents d-flex flex-wrap gap-4 gap-sm-1">
                                                    <h4 class="hotel-view-contents-bottom-title">$ <?php echo $value->price; ?> <sub>/Night</sub>
                                                    </h4>
                                                    <?php if ($value->statusRoom == 'available') { ?> 
                                            <p class="hotel-view-contents-bottom-para text-success"> (<?php echo $value->statusRoom; ?>) 
                                            </p>
                                            <?php }
                                            else{
                                                ?>
                                             <p class="hotel-view-contents-bottom-para text-danger"> (<?php echo $value->statusRoom; ?>) 

                                                <?php

                                            }
                                            ?>
                                                </div>
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
    </div>
</section>