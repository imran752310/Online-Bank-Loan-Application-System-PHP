<?php
require_once("header.php");
?>

  <main id="main" class="main">

    <div class="pagetitle">
    
    </div><!-- End Page Title -->

    <section class="section dashboard">
   <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Extra Documents</h2>
                    </div>
				
					
						<?php
							$IDD = $_SESSION['ID'];
							if(isset($_POST['sendDocumentsBTN']))
							{
								$image = $_FILES['image']['name'];
								    $image_tmp = $_FILES['image']['tmp_name'];
									$path = "uploaded images/";
									move_uploaded_file($image_tmp,$path.$image);
									
								$location =$_POST['location'];
								$filetitle =$_POST['filetitle'];

								$file_name = $_FILES['filename']['name'];
								   $file_tmp =$_FILES['filename']['tmp_name'];
								   $path = "uploaded images/";
								   move_uploaded_file($file_tmp,$path.$file_name);
								   
								  
							

								
   							$queryinsertfile="INSERT into submit_extra_documents_table(image,location,submit_extra_documents_title,submit_extra_documents_fil_name,basic_inquiry_id)values('$image','$location','$filetitle','$file_name','$IDD')";	

								$Datarunquery=mysqli_query($link,$queryinsertfile);
								
								$statusupdate ="update extra_document_table set status='2' where basic_inquiry_id='$IDD'";
								$runStatus=mysqli_query($link,$statusupdate);
								
								if($Datarunquery)
						{
							?>
							  <div class="alert alert-success alert-dismissible fade show" role="alert">
							 Data uploaded successfully 
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=Add_extra_documents.php");

						}else
						{
							?>
							  <div class="alert alert-danger alert-dismissible fade show" role="alert">
							 Data not uploaded
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div>
							<?php
							header("Refresh:2; url=Add_extra_documents.php");
						}
							
					}
								
						?>
					
						
                    <div class="col-lg-12">
                        <form class="form-contact contact_form" action="Add_extra_documents.php" method="POST" enctype="multipart/form-data" id="contactForm" novalidate="novalidate">
                            <div class="row">
                               
                                <div class="col-sm-6">
								<div class="form-group pb-4">
									    <label>Image</label>
                                        <input class="form-control valid" name="image" required type="file" placeholder="Image">
                                    </div>


                                    <div class="form-group">
									    <label>Location</label>
                                        <input class="form-control valid" name="location" required type="text">
                                    </div>
                                </div>

								 <div class="col-sm-6">
								 <div class="form-group pb-4">
									    <label>Documents Title</label>
                                        <input class="form-control valid" name="filetitle" required type="text">
                                    </div>
                                    <div class="form-group">
									    <label>Add File</label>
                                        <input class="form-control valid" name="filename" required type="file">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" class="btn btn-success btn-sm" name="sendDocumentsBTN" value="Submit">
                     
                            </div>
                        </form>
                    </div>
					
                </div>
        </div><!-- End Left side columns -->
		
		
      	  
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















<!-- <?php
// require_once("header.php"); 
?>

  <main id="main" class="main">

    <div class="pagetitle">
    
    </div>< End Page Title -->

    <!-- <section class="section dashboard">
   <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Extra Documents</h2>
                    </div> -->
				
					
						<?php
							// $IDD = $_SESSION['ID'];
							// if(isset($_POST['sendDocumentsBTN']))
							// {
							// 	$filetitle =$_POST['filetitle'];
							// 	$file_name = $_FILES['filename']['name'];
							// 	$file_tmp =$_FILES['filename']['tmp_name'];
							// 	if(move_uploaded_file($file_tmp,"uploaded images/".$file_name))
							// 	{
							// 	$queryinsertfile="insert into submit_extra_documents_table(submit_extra_documents_title,submit_extra_documents_fil_name,
							// 	basic_inquiry_id)values('$filetitle','$file_name','$IDD')";	
							// 	$Datarunquery=mysqli_query($link,$queryinsertfile);
								
							// 	$statusupdate ="update extra_document_table set status='2' where basic_inquiry_id='$IDD'";
							// 	$runStatus=mysqli_query($link,$statusupdate);
								
							// 	if($Datarunquery)
						// {
							?>
							  <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
							 Data uploaded successfully 
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div> -->
							<?php
							// header("Refresh:2; url=Add_extra_documents.php");

						// }else
						// {
							?>
							  <!-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
							 Data not uploaded
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						     </div> -->
							<?php
							// header("Refresh:2; url=Add_extra_documents.php");
						// }
							
							
						// 		}
								
						// 	}
								
						?>
					
						
                    <!-- <div class="col-lg-12">
                        <form class="form-contact contact_form" action="Add_extra_documents.php" method="POST" enctype="multipart/form-data" id="contactForm" novalidate="novalidate">
                            <div class="row">
                               
                                <div class="col-sm-6">
                                    <div class="form-group">
									    <label>Documents Title</label>
                                        <input class="form-control valid" name="filetitle" required type="text">
                                    </div>
                                </div>

								 <div class="col-sm-6">
                                    <div class="form-group">
									    <label>Add File</label>
                                        <input class="form-control valid" name="filename" required type="file">
                                    </div>
                                </div>
								
							 
								
                               
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" class="btn btn-success btn-sm" name="sendDocumentsBTN" value="Submit">
                     
                            </div>
                        </form>
                    </div>
					
                </div> 
        </div> End Left side columns -->
		
		
      	  
    <!-- </section>
  <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
  </main>End #main -->
  <?php
// require_once("footer.php");
?> -