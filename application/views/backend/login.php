
<!DOCTYPE HTML>
<html>
<head>
    <title>Nahid's Photography</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/backend/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/backend/css/style.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url();?>assets/backend/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/backend/js/jquery.min.js"></script>
    <!----webfonts--->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/backend/js/bootstrap.min.js"></script>
</head>
<body id="login">
<div class="login-logo">
    <a href="<?php echo base_url();?>"><h4>Nahid's Photography</h4></a>
</div>
<h2 class="form-heading">login</h2>

<div class="app-cam">

    <?php
    $msg = $this->session->flashdata('msg');
    if($msg != null) {
        echo "<p class='alert alert-danger'>$msg</p>";
    }
    ?>
    <form action="<?php echo base_url();?>admin/login" method="POST">
        <input type="text" class="text" name="email" value="<?php echo set_value('email');?>" placeholder="E-mail address"">
        <?php echo form_error('email','<span class="text-danger">', '</span>'); ?>
        <input type="password" name="password" placeholder="Password"  >
        <?php echo form_error('password','<span class="text-danger">', '</span>'); ?>
        <div class="submit"><input type="submit" name="login"  value="Login"></div>
        <ul class="new">
            <li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
            <li class="new_left pull-right"><p><a href="http://localhost/photostart/">Back To Home</a></p></li>
            <div class="clearfix"></div>
        </ul>
    </form>
</div>
<div class="copy_layout login">
    <p>Copyright &copy; 2017 Nahid's Photography. All Rights Reserved  </p>
</div>
</body>
</html>
