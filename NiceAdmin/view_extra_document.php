<?php
require_once("header.php");
?>

  <main id="main" class="main">
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Customer Extra Documents</h5>
							
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th>Image</th>
                    <th scope="col">User Name</th>
                    <th>location</th>
                    <th scope="col">Document Title</th>
                    <th scope="col">File</th>
                   <th>Download Doc</th>
                  </tr>
                </thead>
				<?php
				$query="select * from submit_extra_documents_table";
				$runquery=mysqli_query($link,$query);
				$no = 1;
				if(mysqli_num_rows($runquery)>0){
				while($row=mysqli_fetch_array($runquery)){
				?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><img src="../user/uploaded images/<?php echo $row['image']; ?>" width="50px"> </td>
                    <th scope="row"><?php 
					$id =  $row['basic_inquiry_id'];
					$queryselectUser="select * from basic_inquiry_table where basic_inquiry_id='$id'";
					$runQuery=mysqli_query($link,$queryselectUser);
					$fetchUsername = mysqli_fetch_array($runQuery);
					echo $fetchUsername['basic_inquiry_first_name'].' '.$fetchUsername['basic_inquiry_last_name'];
					?></th>
          <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['submit_extra_documents_title']; ?></td>
                    <td><?php echo $row['submit_extra_documents_fil_name']; ?></td>
                    <th><a href="../user/uploaded images/<?php echo $row['submit_extra_documents_fil_name']; ?>" download class="btn btn-success"> Download</a></th>
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