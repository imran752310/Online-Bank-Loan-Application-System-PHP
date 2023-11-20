<?php
require_once("header.php");
?>

  <main id="main" class="main">
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Review all customers Data </h5>
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
                    <th scope="col">Schemes Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Remove</th>
                  </tr>
                </thead>
				<?php
				$query="select * from loans_schemes_table order by loans_schemes_id DESC";
				$runquery=mysqli_query($link,$query);
				$no = 1;
				if(mysqli_num_rows($runquery)>0){
				while($row=mysqli_fetch_array($runquery)){
				?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $row['loans_schemes_title']; ?></td>
                    <td><?php echo $row['loans_schemes_description']; ?></td>
                    <td><a href="All_loans_schemes.php?DeleteID=<?php echo $row['loans_schemes_id']; ?>" onclick="return confirm('Are your sure to delete this record');"><button type="button" class="btn btn-danger btn-sm">Remove</button></a></td>
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