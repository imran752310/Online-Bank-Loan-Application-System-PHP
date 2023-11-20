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
				
                <div class="row">
				<?php
				$IDD = $_SESSION['ID'];
				$selectdataquery="select * from apply_loan_table where status='2' and basic_inquiry_id='$IDD'";
				$selectrunquery=mysqli_query($link,$selectdataquery);
				while($fetchID =mysqli_fetch_array($selectrunquery)){
				$fetID =$fetchID['loans_schemes_id'];				
				$query12="select * from loans_schemes_table where loans_schemes_id='$fetID'";
				$runquery12=mysqli_query($link,$query12);
				
				while($row=mysqli_fetch_array($runquery12)){
				?>
                  <div class="col-lg-3 col-md-6 col-sm-6" style="border:2px solid silver;border-radius: 1	px;">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <span class="flaticon-work"></span>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="#"><?php echo  $row['loans_schemes_title']; ?></a></h5>
                                <p><?php echo  $row['loans_schemes_description']; ?></p>
                            </div>
                        </div>
						<a href="#" class="btn btn-success btn-sm">Accepted</a>
                    </div>
				  <?php
				}
				}
				
                 ?>
    
                    

                 </div>
            </div>
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