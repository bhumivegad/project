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
		<div class="container mt-10">
		  <div class="row">
                <div class="col-md-4 p-4 text-center pt-0" style="background-color: rgba(255, 255, 255, 0.7); margin-top: 20px;">
                    <img src="Image/track3.png" style="margin:0 auto; height: 250px;">
                    <form action="" method="POST" class="form">
                        <div class="form-group">
                            <label style="font-size: 20px;">Tracking ID : </label>
                            <input type="text" style="border-radius: 8px;" name="tid" >
                            <label class="text-danger"></label>
                        </div>
                        <input type="submit" name="track" class="btn btn-light text-center" value="Track" style="font-size: 20px;">
                    </form>
                </div>
               <div class="col-md-8 p-4 " style="background-color: rgba(255, 255, 255, 0.7); margin-top: 20px;">
                  <h3 class="display-6 text-center pb-2 mb-3" style="border-bottom: 2px solid black;">Delivery Status</h3>
                    <label>Tracking ID :</label><br>
                <div class="track bg-info">
				   <div class="step active"><span class="icon"><i class="fa fa-map-marker"></i></span><span class="text font-weight-bold">Received</span><span></span></div>
				   <div class="step "><span class="icon"><i class="fa fa-truck"></i></span><span class="text font-weight-bold">On the way</span><span></span></div>
				   <div class="step"><span class="icon"><i class="fa fa-cubes"></i></span><span class="text font-weight-bold">Out for delivery</span><span></span></div>
				   <div class="step"><span class="icon"><i class="fa fa-cubes"></i></span><span class="text font-weight-bold">Delivery</span><span></span></div>
		        </div>
		   
			
	                <label>unable to receive on the expected date?.</label>
	               <form action="tracking.php" method="POST">
	               <label>Drop to a friend nearby in the your city.</label>
			       <input type="submit"  name="view" value="update Delivery Adsdress" class="btn btn-info">
		
	                  <label>Details</label>
                      <div class="form-group text-left">
                      <label>Name:</label> 
                      <input type="text" name="fnm" style="border-radius: 8px;">
                      <label class="text-danger"></label><br>
			

                      <label>Address :</label>
                      <input type="text" name="fadd" style="border-radius: 8px;">
                      <label class="text-danger"></label><br>

                      <label>Contact: </label>			
		              <input type="text" name="cont" style="border-radius: 8px;">
                      <label class="text-danger"></label><br>
		              </div>
		             <input type="submit" name="update" value="update">
		       </form>
              </div>
            </div>
        </div>
        </div>