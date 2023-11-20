<?php
require_once("header.php");
?>

  <main id="main" class="main">
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Review All Customers Data </h5>
								<?php
					if(isset($_GET['acceptid']))
					{
						$acceptid = $_GET['acceptid'];
						
						$query="update basic_inquiry_table set basic_inquiry_status='2' where basic_inquiry_id='$acceptid' ";
						$runquery=mysqli_query($link,$query);
						if($runquery)
						{
							?>
							  <div class="alert alert-success alert-dismissible fade show" role="alert">
							 Record Accepted ..
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=All_customers.php");

						}else
						{
							?>
							  <div class="alert alert-danger alert-dismissible fade show" role="alert">
							 Error try again....? 
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=All_customers.php");
						}
					}
				
				?>
							<?php
					if(isset($_GET['rejectedid']))
					{
						$rejectedid = $_GET['rejectedid'];
						$query="update basic_inquiry_table set basic_inquiry_status='3' where basic_inquiry_id='$rejectedid' ";
						$runquery=mysqli_query($link,$query);
						if($runquery)
						{
							?>
							  <div class="alert alert-info alert-dismissible fade show" role="alert">
							 Record rejected..
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=All_customers.php");

						}else
						{
							?>
							  <div class="alert alert-danger alert-dismissible fade show" role="alert">
							 Error try again....? 
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=All_customers.php");
						}
					}
				
				?>
		
			<?php
				if(isset($_GET['moreID'])){
				$moreID = $_GET['moreID'];
				$query="select * from basic_inquiry_table where basic_inquiry_id='$moreID' order by basic_inquiry_id DESC";
				$runquery=mysqli_query($link,$query);
				if(mysqli_num_rows($runquery)>0){
				while($row=mysqli_fetch_array($runquery)){
				?>
          <!-- Default Card -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['basic_inquiry_first_name'].' '.$row['basic_inquiry_last_name']; ?></h5>
              <b>Gender : </b><p><?php echo $row['basic_inquiry_gender']; ?></p>
              <b>Amount</b><p><?php echo $row['basic_inquiry_amount']; ?></p>
              <b>Password</b><p><?php echo $row['basic_inquiry_customer_password']; ?></p>
              <b>Email Address</b><p><?php echo $row['basic_inquiry_email_address']; ?></p>
              <b>Phone Number</b><p><?php echo $row['basic_inquiry_phone_number']; ?></p>
              <b>Martial Status</b><p><?php echo $row['basic_inquiry_MARITAL_STATUS']; ?></p>
              <b>Organization Name</b><p><?php echo $row['basic_inquiry_emp_industry']; ?></p>
              <b>Organization Emplyoee Name</b><p><?php echo $row['basic_inquiry_emp_industry_name']; ?></p>
              <b>Organization Number</b><p><?php echo $row['basic_inquiry_emp_industry_p_number']; ?></p>
              <b>Monthly Income</b><p><?php echo $row['basic_inquiry_emp_monthly_income']; ?></p>
              <b>Monthly Income</b><p><?php echo $row['basic_inquiry_emp_monthly_income']; ?></p>
			 <p>
			 <?php
			 if($row['basic_inquiry_status']==1){
			 ?>
			 <a href="Moreinfo.php?acceptid=<?php echo $row['basic_inquiry_id']; ?>" ><button type="button" title="click here for more details" class="btn btn-success btn-sm">Accept</button></a>
			 <a href="Moreinfo.php?rejectedid=<?php echo $row['basic_inquiry_id']; ?>" ><button type="button" title="click here for more details" class="btn btn-danger btn-sm">Reject</button></a>
			<?php
			}
			?>
			 <?php
			 if($row['basic_inquiry_status']==2){
			 ?>
			 <button type="button" title="click here for more details"  class="btn btn-success btn-sm disabled">Accepted</button>
			<?php
			}
			?>
			<?php
			 if($row['basic_inquiry_status']==3){
			 ?>
			 <button type="button" title="click here for more details" class="btn btn-danger btn-sm">Rejected</button>
			<?php
			}
			?>
			</p>
			  <p>
			 </p>
			  <p>
			 <a href="All_customers.php" ><button type="button" title="click here for more details" class="btn btn-info btn-sm">Back</button></a>
			 </p>
	         <a href="Request_for_more_documents.php?moredocID=<?php echo $row['basic_inquiry_id']; ?>" >Click here for more documents</a>

            </div>
          </div><!-- End Default Card -->
		  	  <?php
				}
				}else
				{
				?>
					<p>Record not found</p>
				 <?php
				 }
				}
				 ?>
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>
	

      
      </div>
	  
    </section>
  <br/>
  </main><!-- End #main -->
  <?php
require_once("footer.php");
?>