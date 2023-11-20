<?php
require_once("header.php");
?>

  <main id="main" class="main">
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
		
		 <!-- Services Area Start -->
        <div class="services-area pt-150 pb-150"  data-background="section_bg02.jpg">
            <div class="container">
				<?php
					$IDD = $_SESSION['ID'];
					if(isset($_GET['LoanID']))
					{
					$ID33 =$_GET['LoanID'];
					$query1="insert into apply_loan_table(basic_inquiry_id,loans_schemes_id)values('$IDD','$ID33')";
					$runquery1=mysqli_query($link,$query1);
						if($runquery1)
						{
							?>
							  <div class="alert alert-success alert-dismissible fade show" role="alert">
							 You apply successfully check your status
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=All_loans_schemes.php");

						}else
						{
							?>
							  <div class="alert alert-danger alert-dismissible fade show" role="alert">
							 Error try again
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=All_loans_schemes.php");
						}
					
					}
				
				?>
                <div class="row">
				<?php
				$query="select * from loans_schemes_table order by loans_schemes_id DESC";
				$runquery=mysqli_query($link,$query);
				
				while($row=mysqli_fetch_array($runquery)){
				?>
                  <div class="col-lg-3 col-md-6 col-sm-6" style="border:2px solid silver;border-radius: 1	px;">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-work"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html"><?php echo  $row['loans_schemes_title']; ?></a></h5>
                                <p><?php echo  $row['loans_schemes_description']; ?></p>
                            </div>
                        </div>
						<a onclick="return confirm('Are you sure to apply for this loan')" href="All_loans_schemes.php?LoanID=<?php echo  $row['loans_schemes_id']; ?>" class="btn btn-info btn-block btn-sm">Apply</a>
                    </div>
				  <?php
				}
				
                 ?>
    
                    

                 </div>
				
            </div>
			 <hr/>
				 <h2><b>Rules and regulations:</b></h2>
				 <?php
					$query="select * from rules_and_regulation_table";
					$runquerydate=mysqli_query($link,$query);
					if(mysqli_num_rows($runquerydate)>0){
					while($fetchsata=mysqli_fetch_array($runquerydate)){
						?>
						<p>
						<?php echo $fetchsata['rules_and_regulation_description']; ?>
						</p>
						
				<?php
					}
					}else
					{
						?>
						<p class="text text-danger">Data not Added Yet</p>
						<?php
					}
				 
				 ?>
        </div>
        <!-- Services Area End -->

        </div>


      
      </div>
	  
    </section>
  <br/>
  </main><!-- End #main -->
  <?php
require_once("footer.php");
?>