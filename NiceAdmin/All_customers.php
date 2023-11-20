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
					if(isset($_GET['DeleteID']))
					{
						$DeleteID = $_GET['DeleteID'];
						$query="delete from loans_schemes_table where loans_schemes_id='$DeleteID'";
						$runquery=mysqli_query($link,$query);
						if($runquery)
						{
							?>
							  <div class="alert alert-success alert-dismissible fade show" role="alert">
							 Loan schemes deleted successfully..
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=All_loans_schemes.php");

						}else
						{
							?>
							  <div class="alert alert-danger alert-dismissible fade show" role="alert">
							 Loan schemes not deleted....? 
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=All_loans_schemes.php");
						}
					}
				
				?>
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Password</th>
                    <th scope="col">More</th>
                 
                  </tr>
                </thead>
				<?php
				$query="select * from basic_inquiry_table order by basic_inquiry_id DESC";
				$runquery=mysqli_query($link,$query);
				$no = 1;
				if(mysqli_num_rows($runquery)>0){
				while($row=mysqli_fetch_array($runquery)){
				?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $row['basic_inquiry_first_name'].' '.$row['basic_inquiry_last_name']; ?></td>
                    <td><?php echo $row['basic_inquiry_gender']; ?></td>
                    <td><?php echo $row['basic_inquiry_amount']; ?></td>
                    <td><?php echo $row['basic_inquiry_customer_password']; ?></td>
                     <td><a href="Moreinfo.php?moreID=<?php echo $row['basic_inquiry_id']; ?>" ><button type="button" title="click here for more details" class="btn btn-danger btn-sm">More info</button></a></td>
                  </tr>
				  <?php
				  $no++;
				}
				}else
				{
				?>
				 <tr>
                    
                    <td colspan="4" class="text text-center text-danger">Rcord Not Found</td>
                  </tr>
				 <?php
				 }
				 ?>
                </tbody>
              </table>
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