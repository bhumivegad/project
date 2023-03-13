
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
        <style>
            .carousel-inner img {
              width: 100%;
              height: 100%;
            }
        </style>
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
		 <div class = "container-fluid" style="width: 100%; padding: 0; margin: 0;">
            <div id = "carouselwithIndicators" class = "carousel slide container-fluid mt-10" data-ride = "carousel" style="width: 85%; height: 100%; border-radius: 15px;">
               <ol class = "carousel-indicators ">
                  <li data-target = "#carouselExampleIndicators" data-slide-to = "0" class = "active"></li>
                  <li data-target = "#carouselExampleIndicators" data-slide-to = "1"></li>
                  <li data-target = "#carouselExampleIndicators" data-slide-to = "2s"></li>
               </ol>
               
               <div class =" carousel-inner">
                  <div class = "carousel-item active">
                     <img class = "d-block " 
                        src = "Image/c2.jpg" 
                        alt = "First slide" style="height: 80vh; width: fit-content;">
                  </div>
                  
                  <div class = "carousel-item">
                     <img class = "d-block " 
                        src = "Image/c3.jpg" 
                        alt = "Second slide" style="height: 80vh; width: fit-content;">
                  </div>
                  <div class = "carousel-item">
                     <img class = "d-block " 
                        src = "Image/c4.jpg" 
                        alt = "Third slide" style="height: 80vh; width: fit-content;">
                  </div>
               </div>
               
               <a class = "carousel-control-prev" href = "#carouselwithIndicators" role = "button" data-slide = "prev">
                  <span class = "carousel-control-prev-icon" aria-hidden = "true" style="color: black;"></span>
                  <span class = "sr-only">Previous</span>
               </a>
               
               <a class = "carousel-control-next " href = "#carouselwithIndicators" role = "button" data-slide = "next">
                  <span class = "carousel-control-next-icon" aria-hidden = "true" style="color: black;"></span>
                  <span class = "sr-only">Next</span>
               </a>
             </div>
         </div>
         <div class="container" id="about" style="margin-top: 20px; width: 85%;">
             <div class="row">
                <div class="col-md-6 p-5" style="background-color: rgba(255, 255, 255, 0.7); color: black; border-radius: 15px; ">
                    <h2 class="display-5 text-center mb-3 pb-2" style="border-bottom: 2px solid white;">About Us</h2>
                    <p>The launch of CC Couriers from the house of CC Cargo services is exclusively designed to meet the commercial and personal shipment needs of our customers in both urban and rural destinations. We are emerging as a top destination for ‘same-day’ transportation and are continuously serving our customers 24/7/365. We constantly expand our resources to cater to our customer expectation addressing their unique market needs.</p>
                    <p class="pb-3" style="border-bottom: 2px solid white;">Having created a brand in the cargo industry we have ventured into the courier business with the same commitment. We offer flexible and faster delivery solutions. We have spread our footprints far and wide with our bouquet of products and services. We deliver promptly for all your time critical projects.</p>
                </div>
                <div class="col-md-6">
                    <img src="Image/abt3.jpg" style="height: 500px; width: 100%; padding-top: 5%;" >
                </div>
             </div>
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
            
         </div>
        
    </body>
</html>
