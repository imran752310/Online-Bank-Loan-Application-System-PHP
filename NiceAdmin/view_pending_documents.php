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
							
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Document Title</th>
                    <th scope="col">Decscription</th>
                   
                  </tr>
                </thead>
				<?php
				$IDD = $_SESSION['ID'];
				$query="select * from extra_document_table where basic_inquiry_id='$IDD' and status='1'";
				$runquery=mysqli_query($link,$query);
				$no = 1;
				if(mysqli_num_rows($runquery)>0){
				while($row=mysqli_fetch_array($runquery)){
				?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $row['Extra_document_title']; ?></td>
                    <td><?php echo $row['Extra_document_file']; ?></td>
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