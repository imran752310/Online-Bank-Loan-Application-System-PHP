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

				<a href="Add_loans_schemes.php">
                <div class="card-body">
                  <h5 class="card-title">Add <span>| Schemes</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-plus"></i>
                    </div>
                    <div class="ps-3">
					<?php
					$query="select * from loans_schemes_table order by loans_schemes_id DESC";
					$runquery=mysqli_query($link,$query);
					$num=mysqli_num_rows($runquery);
					?>
                      <h6>Add</h6>

                    </div>
                  </div>
                </div>
				</a>

              </div>
            </div><!-- End Sales Card -->
			  <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

				<a href="All_loans_schemes.php">
                <div class="card-body">
                  <h5 class="card-title">All <span>| Loan Schemes</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
					<?php
					$query="select * from loans_schemes_table order by loans_schemes_id DESC";
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

			<a href="All_customers.php">
                <div class="card-body">
                  <h5 class="card-title">Customer<span></span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-user"></i>
                    </div>
                    <div class="ps-3">
				
                      <h6>Customer</h6>

                    </div>
                  </div>
                </div>
				</a>

              </div>
            </div><!-- End Sales Card -->
			  <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

				<a href="Add_Rules_and_regulation.php">
                <div class="card-body">
                  <h5 class="card-title">Add <span>| Rules Regulation</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-plus"></i>
                    </div>
                    <div class="ps-3">
					
                      <h6>Rules Regulation</h6>

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

			<a href="All_Rules_and_regulation.php">
                <div class="card-body">
                  <h5 class="card-title">All <span>| Rules Regulation</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-plus"></i>
                    </div>
                    <div class="ps-3">
					
                      <h6>Rules Regulation</h6>

                    </div>
                  </div>
                </div>
				</a>

              </div>
            </div><!-- End Sales Card -->
			  <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

				<a href="apply_loan_view.php">
                <div class="card-body">
                  <h5 class="card-title"> View <span>| All Loan</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
					
                      <h6>All Loan</h6>

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
                  <h5 class="card-title">Accepted<span>| Loan Customer</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-check"></i>
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

				<a href="Rejected_loan.php">
                <div class="card-body">
                  <h5 class="card-title"> Rejected <span>| Loan Customer</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-times"></i>
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