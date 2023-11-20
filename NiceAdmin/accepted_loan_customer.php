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
					if(isset($_GET['LoanIDAcpt']))
					{
						$acceptid = $_GET['LoanIDAcpt'];
						
						$query="update apply_loan_table set status='2' where basic_inquiry_id='$acceptid' ";
						$runquery=mysqli_query($link,$query);
						if($runquery)
						{
							?>
							  <div class="alert alert-success alert-dismissible fade show" role="alert">
							 Record Accepted ..
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=apply_loan_view.php");

						}else
						{
							?>
							  <div class="alert alert-danger alert-dismissible fade show" role="alert">
							 Error try again....? 
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=apply_loan_view.php");
						}
					}
				?>
							<?php
					if(isset($_GET['LoanIDRej']))
					{
						$rejectedid = $_GET['LoanIDRej'];
						$query="update apply_loan_table set status='3' where basic_inquiry_id='$rejectedid' ";
						$runquery=mysqli_query($link,$query);
						if($runquery)
						{
							?>
							  <div class="alert alert-info alert-dismissible fade show" role="alert">
							 Record rejected..
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=apply_loan_view.php");

						}else
						{
							?>
							  <div class="alert alert-danger alert-dismissible fade show" role="alert">
							 Error try again....? 
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=apply_loan_view.php");
						}
					}
				?>
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