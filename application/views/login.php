<!doctype html>

<html>
<head>
	<title>Mix Juice - Admin</title>
	<meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script>
  function setDefaultCookie(){
	for(var i=1; i<=100; i++) {
		var c = "c" + i.toString();
			setCookie(c, "0", 365);
	}
	}
	</script>
    <style>
        .form-signin
        {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading, .form-signin .checkbox
        {
            margin-bottom: 10px;
        }
        .form-signin .checkbox
        {
            font-weight: normal;
        }
        .form-signin .form-control
        {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .form-signin .form-control:focus
        {
            z-index: 2;
        }
        .form-signin input[type="email"]
        {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }
        .form-signin input[type="password"]
        {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        .account-wall
        {
            margin-top: 20px;
            padding: 40px 0px 20px 0px;
            background-color: #f7f7f7;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .login-title
        {
            color: #555;
            font-size: 18px;
            font-weight: 400;
            display: block;
        }
        .profile-img
        {
            width: 96px;
            height: 96px;
            margin: 0 auto 10px;
            display: block;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border-radius: 50%;
        }
        .need-help
        {
            margin-top: 10px;
        }
        .new-account
        {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body >
    <div class="container">
        <div class="container">
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-md-offset-3">
                	<h2 align="center">LOGIN</h2>
                    <div class="account-wall">
                    <p align="center" style="color:#F00"><!--?php echo $error;?></p-->
                        <form class="form-signin" method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/Admin/cek_login">
                        <input name="email" type="email" class="form-control" placeholder="Email" required autofocus>
                        <br>
                        <input name="password" type="password" class="form-control" placeholder="Password" required>
                            <br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign in</button>
                        <label class="checkbox pull-left">
                            <input type="checkbox" value="remember-me">
                            Remember me
                        </label>
                        <!--a href="#" class="pull-right need-help">Need help? </a--><span class="clearfix"></span>
                        </form>
                    </div>
                    <!--a href="#" class="text-center new-account">Create an account </a-->
                </div>
            </div>
        </div>
        </div>
</div>
</body>
</html>
