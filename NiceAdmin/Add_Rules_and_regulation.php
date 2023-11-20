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
              <h5 class="card-title">Add rules and regulation</h5>
				<?php
					if(isset($_POST['Btn_schemes']))
					{
						$Description= $_POST['description'];
						$query="insert into rules_and_regulation_table(rules_and_regulation_description)values('$Description')";
						$runquery=mysqli_query($link,$query);
						if($runquery)
						{
							?>
							  <div class="alert alert-success alert-dismissible fade show" role="alert">
							 Data Added Successfully
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=Add_Rules_and_regulation.php");

						}else
						{
							?>
							  <div class="alert alert-danger alert-dismissible fade show" role="alert">
							 Data not added
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=Add_Rules_and_regulation.php");
						}
					}
				
				?>
              <!-- General Form Elements -->
              <form method="post" action="Add_Rules_and_regulation.php">
            
               <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add here</h5>
             <textarea name="description" class="tinymce-editor">
              
              </textarea>

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