<?php
ob_start();
$link =mysqli_connect("localhost","root","","onlinebankloanapplicationsystem");
session_start();
if(!(isset($_SESSION['Username'])) or !(isset($_SESSION['userpassword'])) )
{
header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin</title>
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
     <b>  Admin Panel
     </b> </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="index.php" data-bs-toggle="dropdown">
          <i class="bi bi-person"></i>
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Admin</h6>
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
            <a href="Add_loans_schemes.php">
              <i class="bi bi-circle"></i><span>Add scheme</span>
            </a>
          </li>
             <li>
            <a href="All_loans_schemes.php">
              <i class="bi bi-circle"></i><span>All scheme</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
	     <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav2" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Customers</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav2" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="All_customers.php">
              <i class="bi bi-circle"></i><span>All Customer</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
	  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav3" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Rules and regulation </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav3" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="Add_Rules_and_regulation.php">
              <i class="bi bi-circle"></i><span>Add Rules and regulation</span>
            </a>
          </li>
		  <li>
            <a href="All_Rules_and_regulation.php">
              <i class="bi bi-circle"></i><span>All Rules and regulation</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
	  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav34" data-bs-toggle="collapse" href="#">
          <i class="bi bi-eye"></i><span>view</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav34" class="nav-content collapse " data-bs-parent="#sidebar-nav">
		 <li>
            <a href="apply_loan_view.php">
              <i class="bi bi-circle"></i><span>Loan view</span>
            </a>
          </li>
		   <li>
            <a href="accepted_loan.php">
              <i class="bi bi-circle"></i><span>Accepted</span>
            </a>
          </li>
		  		   <li>
            <a href="Rejected_loan.php">
              <i class="bi bi-circle"></i><span>Rejected</span>
            </a>
          </li>
          <li>
            <a href="view_extra_document.php">
              <i class="bi bi-circle"></i><span>Extra Documents View</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
    </ul>
  </aside><!-- End Sidebar-->


  