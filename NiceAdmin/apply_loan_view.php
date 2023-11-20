<?php
require_once("header.php");
?>

  <main id="main" class="main">
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View Pending Loan customer</h5>
							
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Orgazization</th>
                    <th scope="col">loan Name</th>
                    <th scope="col">Status</th>
                   
                  </tr>
                </thead>
				<?php
				$query1="select * from apply_loan_table where status ='1'";
				$runquery1=mysqli_query($link,$query1);				
				if(mysqli_num_rows($runquery1)>0){
				while($row=mysqli_fetch_array($runquery1)){
				?>
                <tbody>
                  <tr>
                    <td><?php
					    $id =  $row['basic_inquiry_id'];
						$queryuserData="select * from basic_inquiry_table where basic_inquiry_id='$id'";
						$runData =mysqli_query($link,$queryuserData);	
						while($fetchdata = mysqli_fetch_array($runData))
						{
						?>
						<tr>
						<td><?php echo $fetchdata['basic_inquiry_first_name']; ?></td>
						<td><?php echo $fetchdata['basic_inquiry_phone_number']; ?></td>
						<td><?php echo $fetchdata['basic_inquiry_email_address']; ?></td>
						<td><?php echo $fetchdata['basic_inquiry_gender']; ?></td>
						<td><?php echo $fetchdata['basic_inquiry_emp_industry']; ?></td>
						<td><?php 
						
						$loanID = $row['loans_schemes_id']; 
						$queryuserData1="select * from loans_schemes_table where loans_schemes_id='$loanID'";
						$runData1 =mysqli_query($link,$queryuserData1);
						$fatchLoanName = mysqli_fetch_array($runData1);
						echo $fatchLoanName['loans_schemes_title'];
						?></td>
						<td>
						<a  href="accepted_loan_customer.php?LoanIDAcpt=<?php echo  $fetchdata['basic_inquiry_id']; ?>" class="btn btn-info btn-block btn-sm">Accept</a>
						<a href="accepted_loan_customer.php?LoanIDRej=<?php echo  $fetchdata['basic_inquiry_id']; ?>" class="btn btn-danger btn-block btn-sm">Reject</a>
						</td>
						</tr>
						<?php
						}
						
						?>
						
						
						<?php
					?></td>
                  </tr>
				  <?php
				}
				}else
				{
				?>
				 <tr>
                    
                    <td colspan="8" class="text text-center text-danger">Rcord Not Found</td>
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