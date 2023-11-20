<?php
require_once("header.php");
?>

  <main id="main" class="main">

    <div class="pagetitle">
    
    </div><!-- End Page Title -->

    <section class="section dashboard">
   <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Profile</h2>
                    </div>
					<?php
					//update profile
					if(isset($_POST['updatePro'])){
						
						$fname = $_POST['fname'];
						$lastname = $_POST['lname'];
						$password = $_POST['password'];
						$useremail = $_POST['uemail'];
						$phonenumber = $_POST['phonenumber'];
						$organization = $_POST['organization'];
						$organizationname = $_POST['emname'];
						$organizationphoneNumber = $_POST['ophoneNumber'];
						$monthlyincome = $_POST['monthlyincome'];
						$loanamount = $_POST['loanamount'];
						$gender = $_POST['name1'];
						$matrialstatus = $_POST['name2'];
						$userstatus = $_POST['status'];
						
						$hiddenId = $_POST['hiddenId'];
						
						$updatequery="update basic_inquiry_table set basic_inquiry_amount='$loanamount',basic_inquiry_gender='$gender',basic_inquiry_first_name='$fname',
						basic_inquiry_last_name='$lastname',basic_inquiry_customer_password='$password',basic_inquiry_email_address='$useremail',basic_inquiry_phone_number='$phonenumber',
						basic_inquiry_MARITAL_STATUS='$matrialstatus',basic_inquiry_emp_industry='$organization',basic_inquiry_emp_industry_name='$organizationname',
						basic_inquiry_emp_industry_p_number='$organizationphoneNumber',basic_inquiry_emp_monthly_income='$monthlyincome',basic_inquiry_status='$userstatus'
						where basic_inquiry_id='$hiddenId'";
						
						$updaterunquery=mysqli_query($link,$updatequery);
						if($updaterunquery)
						{
							?>
							  <div class="alert alert-success alert-dismissible fade show" role="alert">
							 Data updated successfully login agian 
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=logout.php");

						}else
						{
							?>
							  <div class="alert alert-danger alert-dismissible fade show" role="alert">
							 Data not updated
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=update_profile.php");
						}
						
					}
					
					?>
					
					
					<?php
						$IDD = $_SESSION['ID'];
						$query="select * from basic_inquiry_table where basic_inquiry_id = '$IDD'";
						$runquery=mysqli_query($link,$query);
				
				        if($row=mysqli_fetch_array($runquery)){
					?>
						
                    <div class="col-lg-12">
                        <form class="form-contact contact_form" action="update_profile.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                               
                                <div class="col-sm-4">
                                    <div class="form-group">
									    <label>First Name</label>
                                        <input class="form-control valid" name="fname" type="text" value="<?php echo $row['basic_inquiry_first_name'] ?>">
                                    </div>
                                </div>

								 <div class="col-sm-4">
                                    <div class="form-group">
									    <label>First Last Name</label>
                                        <input class="form-control valid" name="lname" type="text" value="<?php echo $row['basic_inquiry_last_name'] ?>">
                                    </div>
                                </div>
								
							 <div class="col-sm-4">
                                    <div class="form-group">
									    <label>Password</label>
                                        <input class="form-control valid" name="password" type="text" value="<?php echo $row['basic_inquiry_customer_password'] ?>">
                                    </div>
                                </div>
								
								 <div class="col-sm-4">
                                    <div class="form-group">
									    <label>Email</label>
                                        <input class="form-control valid" name="uemail" type="text"  value="<?php echo $row['basic_inquiry_email_address'] ?>">
                                    </div>
                                </div>
								
								 <div class="col-sm-4">
                                    <div class="form-group">
									    <label>Phone Number</label>
                                        <input class="form-control valid" name="phonenumber"  type="text" value="<?php echo $row['basic_inquiry_phone_number'] ?>">
                                    </div>
                                </div>
								
								 <div class="col-sm-4">
                                    <div class="form-group">
									    <label>Organization</label>
                                        <input class="form-control valid" name="organization" type="text" value="<?php echo $row['basic_inquiry_emp_industry'] ?>">
                                    </div>
                                </div>
								
								 <div class="col-sm-4">
                                    <div class="form-group">
									    <label>Organization phone number</label>
                                        <input class="form-control valid" name="ophoneNumber" type="text" value="<?php echo $row['basic_inquiry_emp_industry_p_number'] ?>">
                                    </div>
                                </div>
								
								 <div class="col-sm-4">
                                    <div class="form-group">
									    <label>Monthly income</label>
                                        <input class="form-control valid" name="monthlyincome"  type="text" value="<?php echo $row['basic_inquiry_emp_monthly_income'] ?>">
                                    </div>
                                </div>
								
								 <div class="col-sm-4">
                                    <div class="form-group">
									    <label>Loan amount</label>
                                        <input class="form-control valid" name="loanamount" type="text" value="<?php echo $row['basic_inquiry_amount'] ?>">
                                    </div>
                                </div>
								
								 <div class="col-sm-4">
                                    <div class="form-group">
									    <label>Employee name</label>
                                        <input class="form-control valid" name="emname"  type="text" value="<?php echo $row['basic_inquiry_emp_industry'] ?>">
                                    </div>
                                </div>
								
									 <div class="col-sm-4">
                                    <div class="form-group">
									    <label>Gender</label>
										<br/>
                                        <input type="radio" <?php if($row['basic_inquiry_gender']=="Male"){  ?> checked <?php } ?> name="name1" value="Male">Male
                                        <input type="radio" <?php if($row['basic_inquiry_gender']=="Female"){  ?> checked <?php } ?> name="name1" value="Female">Female
                                    </div>
                                </div>
								
									 <div class="col-sm-4">
                                    <div class="form-group">
									    <label>Martial Status</label>
										<br/>
                                        <input type="radio" <?php if($row['basic_inquiry_MARITAL_STATUS']=="married"){  ?> checked <?php } ?> name="name2" value="married">Married
                                        <input type="radio" <?php if($row['basic_inquiry_MARITAL_STATUS']=="unmarried"){  ?> checked <?php } ?> name="name2" value="unmarried">Un-married
                                    </div>
                                </div>
								
                               
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" class="btn btn-success btn-sm" name="updatePro" value="update">
                                <input type="hidden" class="btn btn-success btn-sm" name="hiddenId" value="<?php echo $row['basic_inquiry_id'];  ?>">
                                <input type="hidden" class="btn btn-success btn-sm" name="status" value="<?php echo $row['basic_inquiry_status'];  ?>">
                            </div>
                        </form>
                    </div>
						<?php
						}
						?>
                </div>
        </div><!-- End Left side columns -->
		
		
      	  
    </section>
  <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
  </main><!-- End #main -->
  <?php
require_once("footer.php");
?>