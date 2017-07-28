
<html>
<head>
    <title>Nahid's Photography | Photostat a Photo Gallery</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Photostat Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smart phone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //custom-theme -->
    <link href="<?php echo base_url();?>assets/frontend/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php echo base_url();?>assets/frontend/css/JiSlider.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/frontend/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome-icons -->
    <link href="<?php echo base_url();?>assets/frontend/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->
<div class="banner-top">

    <div class="w3_navigation">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="<?php base_url();?>"><i class="fa fa-camera" aria-hidden="true"></i> Nahid's <p class="logo_w3l_agile_caption">On one Click</p></a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu menu--iris">
                        <ul class="nav navbar-nav menu__list">
                            <li class="menu__item menu__item--current"><a href="../index.html" class="menu__link">Home</a></li>
                            <li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
                            <li class="menu__item"><a href="#gallery" class="menu__link scroll">My Photos</a></li>
                            <li><a class="scroll" href="#services" class="menu__link scroll">Services</a></li>
                            <li class="menu__item"><a href="#contact" class="menu__link scroll">Contact </a></li>
                        </ul>
                    </nav>
                </div>
            </nav>

        </div>
    </div>
    <!-- //header -->
    <!-- banner -->
    <div class="banner-silder">
        <div id="JiSlider" class="jislider">
            <ul>
                <?php foreach ($header as $head):?>
                <li>
                    <div class="w3layouts-banner-top" style="background: url(<?php if(file_exists("images/header/header-pic-{$head->id}.{$head->picture}")):?>
                            <?php echo base_url();?>images/header/header-pic-<?php echo $head->id.'.'.$head->picture;?>
                    <?php else:?><?php echo base_url();?>images/no-thumb.jpg
                    <?php endif;?>) no-repeat 0px 0px;">

                        <div class="container">
                            <div class="agileits-banner-info">
                                <span><?php echo $head->btext;?></span>
                                <h3><?php echo $head->title;?></h3>
                                <p><?php echo $head->shortdes?></p>

                            </div>
                        </div>
                    </div>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>
<!-- //banner -->

<!--about-->
<div class="about" id="about">
    <div class="container">
        <div class="about-main">
            <div class="col-md-6 about-left_w3ls_img">

            </div>
            <div class="col-md-6 about-right_w3ls">
                <div class="about-top_agile_its">
                    <h2>About Me</h2>
                    <h5>Professional in photography</h5>
                    <?php foreach ($about as $ab):?>
                        <p><?php echo $ab->description;?></p>

                    <?php endforeach; ?>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->
    <!-- Tooltip -->
    <!-- //Tooltip -->
    <!--/services -->
    <div class="banner-bottom jarallax" id="services">
        <div class="agile_overlay">
            <div class="container">
                <div class="agileits_heading_section">
                    <h3 class="wthree_head two">WHAT I CREATE</h3>
                    <p class="w3l_sub_para_agile">For Digital Life</p>

                </div>
                <div class="inner_w3l_agile_grids">
                    <?php foreach ($allservice as $service):?>
                    <div class="col-md-4 w3ls_banner_bottom_grid">
                        <div class="w3l_banner_bottom_grid1">
                            <i class="fa fa-camera" aria-hidden="true"></i>
                        </div>
                        <h4><?php echo $service->title;?></h4>
                        <p><?php echo $service->description;?></p>
                    </div>
                    <?php endforeach; ?>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //services -->
    <!--start-gallery-->
    <div class="gallery" id="gallery">
        <div class="agileits_heading_section">
            <h3 class="wthree_head">My Photos</h3>
            <p class="w3l_sub_para_agile">For Digital Life</p>
        </div>
        <div class="inner_w3l_agile_grids">
            <?php foreach ($gphotos as $gphoto):?>
            <div class="col-md-3 gallery-grid gallery1">
                <a href="

                <?php if(file_exists("images/photos-gallery/gall-pic-{$gphoto->id}.{$gphoto->picture}")):?>
                        <?php echo base_url();?>images/photos-gallery/gall-pic-<?php echo $gphoto->id.'.'.$gphoto->picture;?>
                <?php else:?>
                    <?php echo base_url();?>images/no-thumb.jpg
                <?php endif;?>

" class="swipebox">

                    <?php if(file_exists("images/photos-gallery/gall-pic-{$gphoto->id}.{$gphoto->picture}")):?>
                        <img src="<?php echo base_url();?>images/photos-gallery/gall-pic-<?php echo $gphoto->id.'.'.$gphoto->picture;?>" class="img-responsive">
                    <?php else:?>
                        <img src="<?php echo base_url();?>images/no-thumb.jpg" class="img-responsive">
                    <?php endif;?>
                    <div class="textbox">
                        <h4><?php echo $gphoto->caption; ?></h4>
                        <p><i class="fa fa-camera" aria-hidden="true"></i></p>

                    </div>
                </a>
            </div>
            <?php endforeach;?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<!--//gallery-->
<!-- stats -->
<div class="stats jarallax" id="stats">
    <div class="agile_overlay2">
        <div class="container">
            <div class="agileits_heading_section">
                <h3 class="wthree_head two">Stats</h3>
                <p class="w3l_sub_para_agile">For Digital Life</p>

            </div>
            <?php foreach ($allstats as $stats):?>
            <div class="inner_w3l_agile_grids">
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                    <p class="counter"><?php echo $stats->cproject ;?></p>
                    <h3>Complete Projects</h3>
                </div>
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
                    <i class="fa fa-smile-o" aria-hidden="true"></i>
                    <p class="counter"><?php echo $stats->hclient ;?></p>
                    <h3>Happy Clients</h3>
                </div>
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
                    <i class="fa fa-trophy" aria-hidden="true"></i>
                    <p class="counter"><?php echo $stats->awon ;?></p>
                    <h3>Awards Won</h3>
                </div>
                <div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
                    <i class="fa fa-camera" aria-hidden="true"></i>
                    <p class="counter"><?php echo $stats->oclick ;?></p>
                    <h3>Our Clicks</h3>
                </div>
                <div class="clearfix"> </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<!-- //stats -->
<!--/contact-->
<div class="contact-w3ls" id="contact">
    <div class="container">
        <div class="agileits_heading_section">
            <h3 class="wthree_head">Contact Me</h3>
            <p class="w3l_sub_para_agile">Give me a message</p>
        </div>
        <div class="inner_w3l_agile_grids">
            <div class="contact-w3-agile2" data-aos="flip-left">
                <div class="contact-agileits">
                    <h4>Drop a Line</h4>
                    <p class="contact-agile2">Sign Up For Our News Letters</p>
                    <form action="#" method="post" name="sentMessage" id="contactForm" novalidate>
                        <div class="col-md-6 w3l_area_its">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label class="contact-p1">Full Name:</label>
                                    <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label class="contact-p1">Phone Number:</label>
                                    <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 w3l_area">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label class="contact-p1">Email Address:</label>
                                    <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="contact-w3-agile1 map" data-aos="flip-right">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783" class="map" style="border:0" allowfullscreen=""></iframe>
</div>
<!--footer-->
<div class="agile-footer jarallax">
    <div class="agile_overlay1">

        <div class="container">
            <div class="cam"><a href="<?php echo base_url();?>"><i class="fa fa-camera" aria-hidden="true"></i></a></div>

            <div class="w3_agileits_social_media">
                <?php foreach ($footer as $flink):?>
                <ul>
                    <li><a href="<?php echo $flink->facebook?>" target="_blank" class="wthree_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $flink->twitter?>" target="_blank" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $flink->dribble?>" target="_blank" class="wthree_dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo $flink->rss?>" target="_blank" class="wthree_rss"><i class="fa fa-rss"></i></a></li>
                </ul>
                <?php endforeach; ?>
            </div>

            <div class="copy-right">
                <p>© 2017 Nahid's PHotography. All rights reserved | Developed By <a target="_blank" href="http://fb.com/sharifur.robin">Mr.Rp</a></p>
            </div>
        </div>
    </div>
</div>
<!-- //footer -->

<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script src="<?php echo base_url();?>assets/frontend/js/jquery-2.1.4.min.js"></script>
<script src="<?php echo base_url();?>assets/frontend/js/JiSlider.js"></script>
<script>
    $(window).load(function () {
        $('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
    })
</script><script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>
<script src="<?php echo base_url();?>assets/frontend/js/jarallax.js"></script>
<script src="<?php echo base_url();?>assets/frontend/js/SmoothScroll.min.js"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>

<!-- start-smoth-scrolling -->
<script src="<?php echo base_url();?>assets/frontend/js/jqBootstrapValidation.js"></script>
<script src="<?php echo base_url();?>assets/frontend/js/contact_me.js"></script>
<!-- //for bootstrap working -->
<!-- stats -->
<script src="<?php echo base_url();?>assets/frontend/js/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url();?>assets/frontend/js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //stats -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smooth-scrolling -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/swipebox.css">
<script src="<?php echo base_url();?>assets/frontend/js/jquery.swipebox.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });
</script>

<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->

<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/bootstrap-3.1.1.min.js"></script>


</body>
</html>