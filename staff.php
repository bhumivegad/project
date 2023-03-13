<?php
   $con = mysqli_connect("localhost","root","","courier");
   if(isset($_POST['submit']))
   {
	   $name=$_POST['name'];
	   $add=$_POST['add'];
	   $city=$_POST['city'];
	   $state=$_POST['state'];
	   $cont=$_POST['cont'];
	   $sql="INSERT INTO `staff`(`name`, `add`, `city`, `State`, `Contact`) VALUES ('$name','$add','$city','$state','$cont')";
       $res=mysqli_query($con,$sql);
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
                    <ul class="dropdown-menu text-center" id="dd-menu">
                        <li><div><a href="account.php" style="color: black; text-decoration: none;">Account</a></div></li>
                        <li><div><a href="logout.php" style="color: black; text-decoration: none;">Logout</a></div></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="background"></div> 
        
            <div class="container mt-12">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="ins-tab" data-toggle="tab" href="#ins" role="tab" aria-controls="ins" aria-selected="true" style="color: black;">New Order</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="update-tab" data-toggle="tab" href="#update" role="tab" aria-controls="update" aria-selected="false" style="color: black;">Update Order</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="cons-tab" data-toggle="tab" href="#cons" role="tab" aria-controls="cons" aria-selected="false" style="color: black;">Consignments</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active pt-3" id="ins" role="tabpanel" aria-labelledby="ins-tab">
                    <div class="container">
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="form" method="POST">
                            <div class="row text-center">
                            <div class="col-md-6 p-3" style="background-color: rgba(255, 255, 255, 0.7);">
                                <h3 class="mb-3">Sender's Details</h3>
                                <div class="form-group  pl-5">
                                    <label>Name    : </label>
                                    <input type="text" name="name" style="border-radius: 8px;">
                                    <label class="text-danger"></label>
                                </div>
                                <div class="form-group  pl-5">
                                    <label>Address : </label>
                                    <input type="text" name="add" style="border-radius: 8px;">
                                    <label class="text-danger"></label>
                                </div>
                                <div class="form-group  pl-5">
                                    <label>City    : </label>
                                    <input type="text" name="city" style="border-radius: 8px;"> 
                                    <label class="text-danger"></label>
                                </div>
                                <div class="form-group  pl-5">
                                    <label>State : </label>
                                    <input type="text" name="state" style="border-radius: 8px;">
                                    <label class="text-danger"></label>
                                </div>
                                <div class="form-group  pl-5">
                                    <label>Contact : </label>
                                    <input type="text" name="cont" style="border-radius: 8px;">
                                    <label class="text-danger"></label>
                                </div>
                            </div>
                            <div class="col-md-6 p-3" style="background-color: rgba(255, 255, 255, 0.7);">
                                <h3 class="mb-3">Receiver's Details</h3>
                                <div class="form-group text-center pl-5">
                                    <label>Name : </label>
                                    <input type="text" name="name" style="border-radius: 8px;">
                                    <label class="text-danger"></label>
                                </div>
                                <div class="form-group text-center pl-5">
                                    <label>Address : </label>
                                    <input type="text" name="add" style="border-radius: 8px;">
                                    <label class="text-danger"></label>
                                </div>
                                <div class="form-group text-center pl-5">
                                    <label>City : </label>
                                    <input type="text" name="city" style="border-radius: 8px;">
                                    <label class="text-danger"></label>
                                </div>
                                <div class="form-group text-center pl-5">
                                    <label>State : </label>
                                    <input type="text" name="state" style="border-radius: 8px;">
                                    <label class="text-danger"></label>
                                </div>
                                <div class="form-group text-center pl-5">
                                    <label>Contact : </label>
                                    <input type="text" name="cont" style="border-radius: 8px;" >
                                    <label class="text-danger"></label>
                                </div>
                                <div class="form-group text-center pl-5">
                                    <label>Weight : </label>
                                    <input type="text" name="wgt" style="border-radius: 8px;">
                                    <label class="text-danger"></label>
                                </div>
                                <input type="submit" name="submit" value="Place order" class="bt bt-primary">
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="update" role="tabpanel" aria-labelledby="update-tab">
                    <div class="container mt-10">
                        <div class="row">
                            <div class="col-4 p-4 text-center pt-0" style="background-color: rgba(255, 255, 255, 0.7); margin-top: 20px;">
                                 <form action="" method="POST" class="form">
                                    <div class="form-group">
                                        <label style="font-size: 20px;">Tracking ID : </label>
                                        <input type="text" style="border-radius: 8px;" name="inp_tid" value="<?php echo $_SESSION['up_tid'] ?? $status['TrackingID']??'' ; ?>">
                                        <label class="text-danger"></label>
                                    </div>
                                    <input type="submit" name="sel_order" class="btn btn-light text-center" value="Select" style="font-size: 20px;">
                                </form>
                            </div>
                            <div class="col-8 p-4 " style="background-color: rgba(255, 255, 255, 0.7); margin-top: 20px; ">
                                <h3 class="display-6 text-center pb-2 mb-3" style="border-bottom: 2px solid black;">Order Details</h3>
                                <form action=" method="POST" class="form">
                                    <div class="form-group">
                                        <label>Tracking ID : </label>
                                        <label></label>
                                    </div>
                                    <div class="form-group">
                                        <input type='checkbox' name='status_upd' value ="dispatched" disabled>  
                                        <label>Dispatched  </label>
                                       
                                    </div>
                                    <div class="form-group">
                                        <input type='checkbox' name='status_upd' value ="shipped" >
                                        <label>Shipped </label>
                                        
                                    </div>
                                    <div class="form-group">
                                        <input type='checkbox' name='status_upd' value ="out_for_delivery">
                                        <label>Out for Delivery  </label>
                                     
                                    </div>
                                    <div class="form-group">
                                        <input type='checkbox' name='status_upd' value ="delivered">
                                        <label>Delivered  </label>
                                       
                                    </div>
                                    <input type="submit" name="update" value="Update Details" class="btn btn-light">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="cons" role="tabpanel" aria-labelledby="cons-tab">
                    <ul class="nav nav-tabs" id="myTab2" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="arr-tab" data-toggle="tab" href="#arr" role="tab" aria-controls="arr" aria-selected="true" style="color: black;">Arrived</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="del-tab" data-toggle="tab" href="#del" role="tab" aria-controls="del" aria-selected="false" style="color: black;">Delivered</a>
                        </li>
                      </ul>
                      <div class="tab-content b-0" id="myTabContent">
                        <div class="tab-pane fade show active" id="arr" role="tabpanel" aria-labelledby="arr-tab">
                            <table class="table table-hover table-bordered table-striped table-hover" style="background-color: rgba(255, 255, 255, 0.8);">
                                <thead class="thead-dark">
                                    <tr class="table-info"><td>TrackingID</td><td>StaffID</td><td>Sender</td><td>Receiver</td><td>Weight</td><td>Price</td><td>Dispatched</td><td>Shipped</td><td>Out for delivery</td><td>Delivered</td></tr>                    
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="del" role="tabpanel" aria-labelledby="del-tab">
                        <table class="table table-hover table-bordered table-striped table-hover" style="background-color: rgba(255, 255, 255, 0.8);" >
                                <thead class="thead-dark">
                                    <tr class="table-info"><td>TrackingID</td><td>StaffID</td><td>Sender</td><td>Receiver</td><td>Weight</td><td>Price</td><td>Dispatched</td><td>Shipped</td><td>Out for delivery</td><td>Delivered</td></tr>                    
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                      </div>
                      
                </div>
              </div>
              <script>
                $(function() { 
                    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                        localStorage.setItem('lastTab', $(this).attr('href'));
                    });
                    var lastTab = localStorage.getItem('lastTab');
                    if (lastTab) {
                        $('[href="' + lastTab + '"]').tab('show');
                    }   
                });
              </script>
        </div>
    </body>
</html>

CC0101
0101