<?php
require_once("header.php");
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

				<a href="All_loans_schemes.php">
                <div class="card-body">
                  <h5 class="card-title">View <span>| Schemes</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-eye"></i>
                    </div>
                    <div class="ps-3">
					<?php
					$query="select * from loans_schemes_table order by loans_schemes_id DESC";
					$runquery=mysqli_query($link,$query);
					$num=mysqli_num_rows($runquery);
					?>
                      <h6>All Schemes</h6>

                    </div>
                  </div>
                </div>
				</a>

              </div>
            </div><!-- End Sales Card -->
			  <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

				<a href="pending_loan.php">
                <div class="card-body">
                  <h5 class="card-title">Pending <span>| Loan Schemes</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
					<?php
					$IDD = $_SESSION['ID'];
					$query="select * from apply_loan_table where basic_inquiry_id='$IDD' and status = '1'";
					$runquery=mysqli_query($link,$query);
					$num=mysqli_num_rows($runquery);
					?>
                      <h6><?php echo $num ?></h6>

                    </div>
                  </div>
                </div>
				</a>

              </div>
            </div><!-- End Sales Card -->
		
			
            </div>
			
			
       
        </div><!-- End Left side columns -->
		
		
		
		    <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
   	
			  <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

			<a href="accepted_loan.php">
                <div class="card-body">
                  <h5 class="card-title">Accepted <span>| Loan Schemes</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-eye"></i>
                    </div>
                    <div class="ps-3">
						
                      <h6>Accepted</h6>

                    </div>
                  </div>
                </div>
				</a>

              </div>
            </div><!-- End Sales Card -->
			  <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

				<a href="rejected.php">
                <div class="card-body">
                  <h5 class="card-title">Rejected <span>| Loan Schemes</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-eject"></i>
                    </div>
                    <div class="ps-3">
					
                      <h6>Rejected</h6>

                    </div>
                  </div>
                </div>
				</a>

              </div>
            </div><!-- End Sales Card -->
		
			
            </div>
			
	
         

       
        </div><!-- End Left side columns -->


  <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
   	
			  <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

				<a href="Add_extra_documents.php">
                <div class="card-body">
                  <h5 class="card-title"> Request  <span>| For Extra Documents</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-hourglass"></i>
                    </div>
                    <div class="ps-3">
				
                      <h6>Request for Documents</h6>

                    </div>
                  </div>
                </div>
				</a>

              </div>
            </div><!-- End Sales Card -->
	
			
			  <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

				<a href="view_pending_documents.php">
                <div class="card-body">
                  <h5 class="card-title"> Pending  <span>|Extra Documents</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-hourglass"></i>
                    </div>
                    <div class="ps-3">
					<?php
						$IDD = $_SESSION['ID'];
						$query="select * from extra_document_table where basic_inquiry_id='$IDD' and status='1'";
						$runquery=mysqli_query($link,$query);
						$count = mysqli_num_rows($runquery);
					?>
				
                      <h6><img src="images/image_processing20200502-14246-1zk1au.gif" width="100px"><?php echo $count; ?></h6>

                    </div>
                  </div>
                </div>
				</a>

              </div>
            </div><!-- End Sales Card -->
		
			
            </div>
			
			

      
         

       
        </div><!-- End Left side columns -->



        <!-- Right side columns -->
	
		
		
      
      </div>
	  
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