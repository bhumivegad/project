

<?php
  $con = mysqli_connect("localhost","root","","bhumi");
  if(isset($_POST['submit']))
   {
	   $name=$_POST['name'];
	   $email=$_POST['email'];
	   $msg=$_POST['msg'];
	   $sql="INSERT INTO `cont`(`name`, `email`, `massage`) VALUES ('$name','$email','$msg')";
	   $res=mysqli_query($con ,$sql);
	   echo $res;
	   header("location:index.php");
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
                        <a class="nav-item nav-link text-dark mr-5" href="contact.php">Contact Us</a>
                        <a class="nav-item nav-link text-dark mr-5" href="staff.php">staff</a>
                        <a class="nav-item nav-link text-dark" href="login.php"> Login</a>                        
                    </div>
                </div>
            </div>
        </nav>
		
             
         </div>
		 <div class="container" style="margin-top: 20px; width: 85%;">
            <div class="row">
                <div class="col-md-6 text-center p-5" style="background-color: rgba(255, 255, 255, 0.7); color: black; ">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaTMwTezgB2l5AhBGAqBnzRxCg6NwfMeLOcg&usqp=CAU " width="400" height="400">
                                  
                </div>
		<div class="col-md-6 text-center p-5" style="background-color: rgba(255, 255, 255, 0.7); color: black;  "  id='contact'>
                        <h4 style="border-bottom:2px solid white; padding-bottom:2px;">Contact Us</h4>
                        <form action="index.php" class="form text-left" method = "POST">
                            <div class="form-group">
                                <label>Name : </label>
								<input type="text" name="name" class="form-control" placeholder="Enter name" required></br>
							 </div>
                             
                               <div class="form-group">							 
								<label>EMAIL :</label>
								<input type="text" name="email" class="form-control" placeholder="Enter email" required></br>
							  </div>
                         
							<div class="form-group">
								<label>MASSAGE : </label>
								<input type="text" name="msg" class="form-control" placeholder="Enter massage" required></br>
							</div>	
								 <input type="submit" name="submit" value="Submit" class="btn btn-info">
                        </form>
                </div>
             </div>