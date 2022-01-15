<?php
ob_start();
?>

<div class="slider-area">
    <div class="slider">
        <div id="bg-slider" class="owl-carousel owl-theme">

            <div class="item"><img src="assets/img/slide1/slider-image-1.jpg" alt="GTA V"></div>
        </div>
    </div>
    <div class="slider-content">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                <h2>Property for Selling</h2>

            </div>
        </div>
    </div>
</div>

<!-- property area -->
<div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                <!-- /.feature title -->
                <h2>Top Offers</h2>
            </div>
        </div>

        <div class="row">
            <div class="proerty-th"> 
                <!-- Collect all data from DB in foreach cycle -->

                <?php
                if (isset($_SESSION['UserName'])) {
                    if ($_SESSION['PrivilegesId'] >= 2) {
                        
                    }
                }
                foreach ($propertylist as $property) {





                    echo '
                          <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-3.html" ><img src="' . $property['PropertyImage1'] . '"></a>

                                </div>
                                <div class="item-entry overflow">
                                     <h5><a href="property?id=' . $property['PropertyId'] . '">' . $property['PropertyName'] . '</a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="pull-left"><b>Area :</b> ' . $property['PropertyArea'] . ' Sq </span>
                                    <span class="proerty-price pull-right">£ ' . $property['PropertyPrice'] . '</span>
                                            <div class="property-icon">
                                                <img src="assets/img/icon/bed.png">(' . $property['PropertyBedRooms'] . ')|
                                                <img src="assets/img/icon/shawer.png">(' . $property['PropertyBathRooms'] . ')|
                                                <img src="assets/img/icon/cars.png">(' . $property['PropertyGarages'] . ')  
                                            </div>
                                </div>
                            </div>
                        </div>
                                      ';
                }
                ?>        
















            </div>
        </div>
    </div>
</div>


<!-- Count area -->
<div class="count-area">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                <!-- /.feature title -->
                <h2>You can trust Us </h2> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12 percent-blocks m-main" data-waypoint-scroll="true">
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="count-item">
                            <div class="count-item-circle">
                                <span class="pe-7s-users"></span>
                            </div>
                            <div class="chart" data-percent="5000">
                                <h2 class="percent" id="counter">0</h2>
                                <h5>HAPPY CUSTOMER </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="count-item">
                            <div class="count-item-circle">
                                <span class="pe-7s-home"></span>
                            </div>
                            <div class="chart" data-percent="12000">
                                <h2 class="percent" id="counter1">0</h2>
                                <h5>Properties in stock</h5>
                            </div>
                        </div> 
                    </div> 
                    <div class="col-sm-3 col-xs-6">
                        <div class="count-item">
                            <div class="count-item-circle">
                                <span class="pe-7s-flag"></span>
                            </div>
                            <div class="chart" data-percent="120">
                                <h2 class="percent" id="counter2">0</h2>
                                <h5>City registered </h5>
                            </div>
                        </div> 
                    </div> 
                    <div class="col-sm-3 col-xs-6">
                        <div class="count-item">
                            <div class="count-item-circle">
                                <span class="pe-7s-graph2"></span>
                            </div>
                            <div class="chart" data-percent="5000">
                                <h2 class="percent"  id="counter3">12</h2>
                                <h5>DEALER BRANCHES</h5>
                            </div>
                        </div> 

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




                                

                                
                                



       
 <?php
 $content=ob_get_clean();
 include_once 'view/layout.php';
 ?>