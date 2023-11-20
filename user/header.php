<?php
ob_start();
$link =mysqli_connect("localhost","root","","onlinebankloanapplicationsystem");
session_start();
if(!(isset($_SESSION['Email'])) or !(isset($_SESSION['password'])) )
{
header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Customer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
       <b>Admin Panel</b>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
			<?php
			?>
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-person"></i>
			<?php
				$IDD = $_SESSION['ID'];
				$query="select * from basic_inquiry_table where basic_inquiry_id='$IDD'";
				$runquery=mysqli_query($link,$query);
				$fetchName = mysqli_fetch_array($runquery);
			?>
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $fetchName['basic_inquiry_first_name'].' '.$fetchName['basic_inquiry_last_name'] ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo $fetchName['basic_inquiry_first_name'].' '.$fetchName['basic_inquiry_last_name'] ?></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
		
            <li>
              <a class="dropdown-item d-flex align-items-center" href="logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
     <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav1" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bank"></i><span>Loans schemes </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav1" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="All_loans_schemes.php">
              <i class="bi bi-circle"></i><span>View schemes</span>
             
            </a>
          </li>
      
        </ul>
      </li><!-- End Components Nav -->

	  
	 <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav123" data-bs-toggle="collapse" href="#">
          <i class="bi bi-pencil-square"></i><span>Loan Status</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav123" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="pending_loan.php">
              <i class="bi bi-circle"></i><span>Pending</span>
             
            </a>
			<a href="accepted_loan.php">
              <i class="bi bi-circle"></i><span>Accepted</span>
             
            </a>
			<a href="rejected.php">
              <i class="bi bi-circle"></i><span>Rejected</span>
             
            </a>
          </li>
      
        </ul>
      </li><!-- End Components Nav -->
	  
	    
	  
	   <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav124" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-text"></i><span>Extra Documents </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav124" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="Add_extra_documents.php">
              <i class="bi bi-circle"></i><span>Add</span>
             
            </a>
          </li>
      
        </ul>
      </li><!-- End Components Nav -->
	  
	  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav12" data-bs-toggle="collapse" href="#">
          <i class="bi bi-wrench"></i><span>Update Profile </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav12" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="update_profile.php">
              <i class="bi bi-circle"></i><span>Update</span>
             
            </a>
          </li>
      
        </ul>
      </li><!-- End Components Nav -->

	
    

    </ul>

  </aside><!-- End Sidebar-->


  