<!DOCTYPE HTML>
<html>
<head>
    <title>Nahid's Photography | Personal Photo Gallery </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/backend/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/backend/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="<?php echo base_url();?>assets/backend/css/lines.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url();?>assets/backend/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/backend/js/jquery.min.js"></script>
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Nav CSS -->
    <link href="<?php echo base_url();?>assets/backend/css/custom.css" rel="stylesheet">
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/backend/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>assets/backend/js/custom.js"></script>
    <!-- Graph JavaScript -->
    <script src="<?php echo base_url();?>assets/backend/js/d3.v3.js"></script>
    <script src="<?php echo base_url();?>assets/backend/js/rickshaw.js"></script>
    <style>
        a.btn.btn-info.own {
            background: rgb(6, 217, 149);
        }
        .panel.panel-warning.own .panel-heading {
            background: rgb(6, 217, 149);
            border-color: rgb(6, 217, 149);
        }

        .panel.panel-warning.own {
            border-color: rgb(6, 217, 149);
        }
        a.btn.btn-primary {
            background: rgb(6, 217, 149) !important;
            color: #fff !important;
        }
        .btn-primary:hover {
            background-color: #fff !important;
            border-color: #fff !important;
            background-color: rgb(6, 217, 149) !important;
            opacity: .7;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url();?>admin/dashboard">Nahid's Photography</a>
        </div>
        <!-- /.navbar-header -->
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                    <img src="<?php echo base_url();?>images/avatar.png">
                </a>
                <ul class="dropdown-menu">
                    <li class="dropdown-menu-header text-center">
                        <strong>Account</strong>
                    </li>
                    <li class="m_2"><a href="<?php echo base_url();?>/logout"><i class="fa fa-lock"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo base_url()?>admin/dashboard"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-laptop nav_icon"></i>Header Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url()?>header">Hedear</a>
                                <a href="<?php echo base_url()?>header/create">Add New</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-laptop nav_icon"></i>About Me Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url()?>about">About</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-laptop nav_icon"></i>What I Create Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url()?>service">My Creation</a>
                                <a href="<?php echo base_url()?>service/create">Add New</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-laptop nav_icon"></i>Photos Gallery Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url()?>my-photos">Photos Gallery</a>
                                <a href="<?php echo base_url()?>my-photos/create">Add New</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-laptop nav_icon"></i>Stats Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url()?>stats">Update Stats</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-laptop nav_icon"></i>Foorter Management<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo base_url()?>footer">Update Footer Social Links</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">
        <div class="graphs">
            <?php
                if(isset($content)){
                    echo $content;
                }
            ?>

            <div class="copy">
                <p>Copyright , 2017 Nadid's Photography. All Rights Reserved | Developed By <a href="https://www.facebook.com/sharifur.robin">Mr.Rp</a> </p>
            </div>
        </div>

    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url();?>assets/backend/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/js/parsley.js"></script>
<script type="text/javascript" src="https://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script type="text/javascript">

    tinymce.init({
        selector: "textarea",
        theme: "modern",
        setup: function(editor) {
            editor.on('change', function() {
                editor.save();
            });
        },
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        toolbar2: "print preview media | forecolor backcolor emoticons",
        image_advtab: true,
        templates: [
            {title: 'Test template 1', content: 'Test 1'},
            {title: 'Test template 2', content: 'Test 2'}
        ],
        image_title: true,
        convert_urls: false,
        content_css: "css/content.css"
    });
</script>
</body>
</html>
