<?php
	include "config.php";
	if(isset($_POST['login']))
	{
		$mail=$_POST['mail'];
		$psw=$_POST['psw'];
		$sql="INSERT INTO `login`(`email`, `massage`) VALUES ('$mail','$psw')";
		$res = mysqli_query($con,$sql);
		$count  = mysqli_affected_rows($con);
		if($count == 1)
		{
			session_start();
			$_SESSION['show'] = $mail;
			header("location:index.php");
		}
		else
		{
			echo	"wrong id or password ";
		}

	}
?>

<html>
    <head>
        <title>Couriers</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style/bootstrap.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style/style.css">
        <link rel="icon" type="image/png" sizes="32x32" href="Image/favicon-32x32.png">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>
	 <body style="font-family: Arial, Helvetica, sans-serif;">
	 
        <div ><img src="Image/logo.png" id="logo" style="height: 100px !important;  margin-top: 10px !important;"  ></div>
		<div class="background"></div>
		 <nav class="navbar navbar-toggleable-md navbar-expand-lg navbar-default navbar-light mb-10" style="background-color: rgba(255, 255, 255, 0.7); margin-bottom: 20px; margin-top:10px !important;">
            <div class="container">
                <button class="navbar-toggler text-dark" data-toggle="collapse" data-target="#mainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                    <div class="navbar-nav  " style="margin: 0 auto; font-size: large;">
                        <a class="nav-item nav-link text-dark mr-5 active" href="index.php" >Home</a>
                        <a class="nav-item nav-link text-dark mr-5" href="about">About</a>
                        <a class="nav-item nav-link text-dark mr-5" href="tracking.php">Tracking</a>
                        <a class="nav-item nav-link text-dark mr-5" href="branches.php">Branches</a>
                        <a class="nav-item nav-link text-dark mr-5" href="contac.php">Contact Us</a>
                        <a class="nav-item nav-link text-dark" href="login.php"> Login</a>                        
                    </div>
                </div>
            </div>
        </nav>
		<div class="container text-center p-3" style="background-color: rgba(255, 255, 255, 0.7); margin-top: 20px; border-radius: 15px; width: 35%;">
		     <img src="Image/userlogo.png" style="margin:0 auto; height: 140px; width: 140px; margin-bottom: 15px;"><br>
		     <form action="login.php" method="POST">
		      <label>EMAIL</label>
		      <input type="text"  name="mail" class="form-control" placeholder="Enter email" required></br>
		      <label>PASSWORD</label>
		      <input type="password" name="psw" class="form-control" placeholder="Enter password" required></br>
			   <input type="submit" name="login" value="Login" class="btn btn-info">
		     </form>
		 <div class="modal fade" id="loginform">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h3 class="modal-title">Login</h3>
               </div>
               <div class="modal-body">
            <div class="row">
            <div class="login_wrap">
            <div class="col-md-12 col-sm-6">
              <form method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="mail" placeholder="Email address*">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="psw" placeholder="Password*">
                </div>
               
                <div class="form-group">
                  <input type="submit" name="login" value="Login" class="btn btn-block">
                </div>
              </form>
             </div>
           
            </div>
           </div>
         </div>
	   </div>
	</div>
  </div>
      <div class="modal-footer text-center">
        <p>Don't have an account? <br><a href="#signupform" data-toggle="modal" data-dismiss="modal">Signup </a></p>
        <p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>
      </div>
    </div>
  </div>
</div
      