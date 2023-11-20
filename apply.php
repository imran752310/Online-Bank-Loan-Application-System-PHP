<?php
ob_start();
$link =mysqli_connect("localhost","root","","onlinebankloanapplicationsystem");
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Online Bank Loan Application System</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
                <div class="main-header  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">  
                                            <li class="active"><a href="index.html">Home</a></li>
                                            <li><a href="services.php">Services</a></li>
                                         
                                            <li><a href="contact.php">Contact</a></li>
										
											<li><a href="user/login.php">Login</a></li>
											<li><a href="NiceAdmin/login.php">Admin</a></li>

                                        </ul>
                                    </nav>
                                </div>
                               
                            </div>
                            </div>   
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Header End -->
    </header>
    <main>

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
							<?php
					if(isset($_POST['formBTN']))
					{
						$amount= $_POST['amount'];
						$maleorfemale= $_POST['radio'];
						$fName= $_POST['fName'];
						$Lname= $_POST['Lname'];
						$password= $_POST['password'];
						$emailaddress= $_POST['emailaddress'];
						$phoneNumber= $_POST['phoneNumber'];
						$status= $_POST['status'];
						$eindustry= $_POST['eindustry'];
						$ename= $_POST['ename'];
						$workphoneNumber= $_POST['workphoneNumber'];
						$monthlyincome= $_POST['monthlyincome'];
						$query="insert into basic_inquiry_table(basic_inquiry_amount,basic_inquiry_gender,basic_inquiry_first_name,
						basic_inquiry_last_name,basic_inquiry_customer_password,basic_inquiry_email_address,basic_inquiry_phone_number,
						basic_inquiry_MARITAL_STATUS,basic_inquiry_emp_industry,basic_inquiry_emp_industry_name,basic_inquiry_emp_industry_p_number,
						basic_inquiry_emp_monthly_income,basic_inquiry_status)values('$amount','$maleorfemale','$fName','$Lname','$password','$emailaddress',
						'$phoneNumber','$status','$eindustry','$ename','$workphoneNumber','$monthlyincome','1')";
						$runquery=mysqli_query($link,$query);
						if($runquery)
						{
							?>
							  <div class="alert alert-success alert-dismissible fade show" role="alert">
							  Dear cusotomer your basic inquiry added successfully now login and check your status online..
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:3; url=apply.php");

						}else
						{
							?>
							  <div class="alert alert-danger alert-dismissible fade show" role="alert">
							 Error  not Added 
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:3; url=apply.php");
						}
					}
				
				?>
                            <h2>Apply Form</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- Apply Area Start -->
        <div class="apply-area pt-150 pb-150">
            <div class="container">
                <div class="row justify-content-center">
					
                    <div class="col-lg-8">
                        <div class="apply-wrapper">
                            <!-- Form -->
                            <form class="Myform" action="apply.php" method="post">
							
                                <div class="row">
                                    <div class="col-lg-12">
                                       <div class="single-form">
                                            <label>* Enter Amount ($) </label>
                                            <input type="number" name="amount" placeholder="Amount">
                                       </div>
                                    </div>
                                    <!-- Radio -->
                                    <div class="col-lg-12">
									<br/>

                                       <div class="single-form  d-flex">
                                            <label>* Select Gender :</label>
                                            <!--Radio Select -->
                                           <div class="select-radio6">
                                                <div class="radio">
                                                    <input id="radio" name="radio" value="Male" type="radio" checked>
                                                    <label for="radio-6" class="radio-label" >Male</label>
                                                </div>
                                                <div class="radio">
                                                    <input id="radio" name="radio" value="Female" type="radio">
                                                    <label for="radio-7" class="radio-label">Female</label>
                                                </div>
                                            </div>
                                       </div>
									   <br>
                                    </div>
									
                                    <!-- First Name -->
                                    <div class="col-lg-4">
                                        <div class="single-form">
                                             <label>* FIRST NAME</label>
                                             <input type="text" name="fName" placeholder="Enter name">
                                        </div>
                                     </div>
                                     <!-- Last Name -->
                                    <div class="col-lg-4">
                                        <div class="single-form">
                                             <label>* Last NAME</label>
                                             <input type="text" name="Lname" placeholder="Enter name">
                                        </div>
                                     </div>
									   <!-- Password -->
                                    <div class="col-lg-4">
                                        <div class="single-form">
                                             <label>*Login Password</label>
                                             <input type="password" name="password" placeholder="Enter password">
                                        </div>
                                     </div>
                                     <!-- Nice Select -->
                                 
                                    <!-- First Name -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* Email Adderess</label>
                                            <input type="email" name="emailaddress" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <!-- Last Name -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* Phone Number</label>
                                            <input type="text" name="phoneNumber" placeholder="Enter Number">
                                        </div>
                                    </div>
                                    <!-- Nice Select -->
                                    <div class="col-lg-12">
                                        <div class="single-form">
                                            <label>* MARITAL STATUS</label>
                                            <div class="select-option mb-10">
                                                <select name="status" id="select1">
                                                    <option value="null">Choose Categories</option>
                                                    <option value="married">Married</option>
                                                    <option value="unmarried">Un Married</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                 
                                    <!--  EMPLOYMENT INDUSTRY -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* EMPLOYMENT INDUSTRY</label>
                                            <input type="text" name="eindustry" placeholder="Enter INDUSTRY">
                                        </div>
                                    </div>
                                    <!-- Last Name -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* EMPLOYER NAME</label>
                                            <input type="text" name="ename" placeholder="Enter name">
                                        </div>
                                    </div>
                                    <!--PHONE NUMBER -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* WORK PHONE NUMBER</label>
                                            <input type="text" name="workphoneNumber" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <!--  MONTHLY INCOME -->
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label>* MONTHLY INCOME ($)</label>
                                            <input type="text" name="monthlyincome" placeholder="Enter name">
                                        </div>
                                    </div>
							
							
                            
                            <!-- End From -->
                            <!-- Form btn -->
                            <input type="submit" name="formBTN" class="btn apply-btn mt-30" value="APPLY NOW" >
							</form>
							<fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Apply Area End -->

    </main>
       <footer>
        <!-- Footer Start-->
        <div class="footer-area">
            <div class="container">
        
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                
                    </div>
               </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
	

    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
		<script type="text/javascript">
		
		
		

		
    </body>
</html> 
		<script>
		/*
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
*/
</script>