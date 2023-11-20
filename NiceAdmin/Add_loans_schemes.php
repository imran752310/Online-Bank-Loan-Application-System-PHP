<?php
require_once("header.php");
?>

  <main id="main" class="main">
    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add various loans schemes</h5>
				<?php
					if(isset($_POST['Btn_schemes']))
					{
						$title = $_POST['Title_tft'];
						$rate_of_interest = $_POST['rate_of_interest'];
						$Description= $_POST['Description_tft'];
						$query="insert into loans_schemes_table(loans_schemes_title,loans_schemes_description,interest_rate)values('$title','$Description','$rate_of_interest')";
						$runquery=mysqli_query($link,$query);
						if($runquery)
						{
							?>
							  <div class="alert alert-success alert-dismissible fade show" role="alert">
							 Loan schemes Added successfully
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=Add_loans_schemes.php");

						}else
						{
							?>
							  <div class="alert alert-danger alert-dismissible fade show" role="alert">
							 Loan schemes not Added 
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=Add_loans_schemes.php");
						}
					}
				
				?>
              <!-- General Form Elements -->
              <form method="post" action="Add_loans_schemes.php">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" name="Title_tft" required class="form-control">
                  </div>
                </div>
				
				 <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Rate of interest </label>
                  <div class="col-sm-10">
                    <input type="text" name="rate_of_interest" required class="form-control">
                  </div>
                </div>
              
              
               
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="Description_tft" required style="height: 100px"></textarea>
                  </div>
                </div>
              
          
               

                <div class="row mb-3">
                  
                  <div class="col-sm-10">
                    <button type="submit" name="Btn_schemes" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

         

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