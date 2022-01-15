<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];
?>

<!DOCTYPE html>

<head> <!-- HEADER -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>London Residence Limited </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- External Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/fontello.css">
    <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icheck.min_all.css">
    <link rel="stylesheet" href="assets/css/price-range.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">  
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

    <nav class="navbar navbar-default ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" <?php if ($path == '') {
    echo 'style="text-decoration:underline"';
} ?> href="./"><img src="assets/img/logo.png" alt=""></a>
            </div>

            <ul class="main-nav nav navbar-nav navbar-right">


                <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" <?php if ($path == '') {
    echo 'style="text-decoration:underline"';
} ?> href="./">Home page</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" <?php if ($path == 'properties') {
                    echo 'style="text-decoration:underline"';
                } ?> href="properties">Our Offers</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" <?php if ($path == 'contacts') {
                    echo 'style="text-decoration:underline"';
                } ?> href="contacts">Contacts</a></li>

                <?php
                if (isset($_SESSION['UserName'])) {
                    echo ' <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="logout">Log out</a></li>';
                    echo ' <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="navBuutons" href="profile">My profile</a></li>';
                    //echo '	<b class="navYouLogAs">Hello, : '.$_SESSION["UserName"].'</b> '; dev tools
                    // echo '<img width="50px" height="50px" src="images\'.$_SESSION["PrivilegesId"]." alt="'.$_SESSION["UserName"].'">';
                } else {
                    ?>

                    <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" <?php if ($path == 'logReg') {
                        echo 'style="text-decoration:underline"';
                    } ?> href="login">Login</a></li>
    <?php
}
?>
            </ul>
        </div>



    </div>
</div>




</nav>


<div class="body">

    <div class="content"> <!-- Content -->
    <!-- For Import content -->
<?php
if (isset($content))
    echo $content;
?>

    </div> <!-- End content -->
</div>




















<script src="assets/js/modernizr-2.6.2.min.js"></script>

<script src="assets/js/jquery-1.10.2.min.js"></script> 
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.js"></script>

<script src="assets/js/easypiechart.min.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.js"></script>

<script src="assets/js/icheck.min.js"></script>
<script src="assets/js/price-range.js"></script>

<script src="assets/js/main.js"></script>
<!-- Footer area-->
<div class="footer-area">

    <div class=" footer">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                    <div class="single-footer">
                        <h4>About us </h4>
                        <div class="footer-title-line"></div>


                        <ul class="footer-adress">
                            <li><i class="pe-7s-map-marker strong"> </i> Solander Gardens 85, E10 DF, London</li>
                            <li><i class="pe-7s-mail strong"> </i> pritulin.vladimir.uk@gmail.com</li>
                            <li><i class="pe-7s-call strong"> </i> +7 9999999999</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                    <div class="single-footer">
                        <h4>Quick links </h4>
                        <div class="footer-title-line"></div>
                        <ul class="footer-menu">
                            <li><a  <?php if ($path == 'properties') {
    echo 'style="text-decoration:underline"';
} ?> href="properties">Properties</a>  </li> 

                            <li><a <?php if ($path == 'contacts') {
    echo 'style="text-decoration:underline"';
} ?> href="contacts">Contact us</a></li> 
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                    <div class="single-footer">
                        <h4>Last News</h4>
                        <div class="footer-title-line"></div>
                        <ul class="footer-blog">
                            <li>
                                <div class="col-md-3 col-sm-4 col-xs-4 blg-thumb p0">


                                    </a>
                                    <span class="blg-date">10.01.2022</span>

                                </div>
                                <div class="col-md-8  col-sm-8 col-xs-8  blg-entry">
                                    <h6> <a href="single.html">No new news (still in dev bro : 3) </a></h6> 
                                    <p style="line-height: 17px; padding: 8px 2px;">Here will be news ...</p>
                                </div>
                            </li> 






                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                    <div class="single-footer news-letter">
                        <h4>Stay in touch</h4>
                        <div class="footer-title-line"></div>
                        <p>Write your email for have receiving new offers.</p>

                        <form>
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="E-mail ... ">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary subscribe" type="button"><i class="pe-7s-paper-plane pe-2x"></i></button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </form> 

                        <div class="social pull-right"> 
                            <ul>
                                <li><a class="wow fadeInUp animated" href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a class="wow fadeInUp animated" href="" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="wow fadeInUp animated" href="" data-wow-delay="0.3s"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="wow fadeInUp animated" href="" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="wow fadeInUp animated" href="" data-wow-delay="0.6s"><i class="fa fa-dribbble"></i></a></li>
                            </ul> 
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </body>
        </html>