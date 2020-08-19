<!DOCTYPE html>
<html lang="en">

<head>

	<?php // header code
		include 'header.php';
	?>

</head>

<body id="page-top">
	
	<?php
		$activePage = "home";
	?>
	
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
	
		<?php // sideMenu code
			include 'sideMenu.php';
		?>
    
	</ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

			<?php // topBar code
				include 'topBar.php';
			?>
			
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Basic operation for PHP</h1>
          </div>

          <!-- Content Row -->
          <div class="row justify-content-center">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total operation</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-cogs fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">level of programming</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Basic / beginner</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-tachometer-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
          </div>
		  
		  
		  <div class="row">
			  <div class="col-lg-12 mb-4">

				  <!-- Introduction -->
				  <div class="card shadow mb-4">
					<div class="card-header py-3">
					  <h6 class="m-0 font-weight-bold text-primary">Introduction</h6>
					</div>
					<div class="card-body">
					  <div class="text-center">
						<img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/PHP.png" alt="">
					  </div>
					  <p>The PHP Hypertext Preprocessor (PHP) is a programming language that allows web developers to create dynamic content that interacts with databases. PHP is basically used for developing web based software applications.
					  There are many application and features that can be done using PHP. However, in this website will show you the basic operation of PHP that use to manipulate the data between the database and website.</p>
					  <p><strong>The basic operation are CRUD (Create,retrieve, update and delete).</strong></p>
					  <a target="_blank" rel="nofollow" href="https://www.tutorialrepublic.com/php-tutorial/php-mysql-crud-application.php">More information &rarr;</a>
					</div>
				  </div>

				</div>
			
			</div>
			
			<div class="row">
				<div class="col-lg-6 mb-4">
					<!-- Create -->
					<div class="card shadow mb-4">
					<!-- Card Header - Accordion -->
					<a href="#insert" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="insert">
						<h6 class="m-0 font-weight-bold text-primary">Create (Insert)</h6>
					</a>
					<!-- Card Content - Collapse -->
					<div class="collapse show" id="insert">
						<div class="card-body">
						Create or insert is one of the process of data manipulation between database and website. Just like the name, it is a process to insert data from website to the database.
						For inserting the data into the database, we will either use single or multiple table and column in the database. Different ways to code are use to make those process. For clearer explanation, let's see the examples below.
						
						</br></br><a href="insert.php"> Single table and column &rarr;</a>
						</br><a href="insertMultiple.php"> Multiple tables and colums &rarr;</a>
						</div>
					</div>
					</div>
				</div>
				
				<div class="col-lg-6 mb-4">
					<!-- Create -->
					<div class="card shadow mb-4">
					<!-- Card Header - Accordion -->
					<a href="#read" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="read">
						<h6 class="m-0 font-weight-bold text-primary">Retrieve (read)</h6>
					</a>
					<!-- Card Content - Collapse -->
					<div class="collapse show" id="read">
						<div class="card-body">
						Retieve or read is one of the process of data manipulation between database and website. Just like the name, it is a process to retrieve data from database and display the data in the website pages.
						For retrieving the data from the database, we will either use single or multiple table and column in the database. Different ways to code are use to make those process. For clearer explanation, let's see the examples below.
						
						</br></br><a href="read.php"> Single table and column &rarr;</a>
						</br><a href="readMultiple.php"> Multiple tables and colums &rarr;</a>
						</div>
					</div>
					</div>
				</div>
			
			</div>
			
			<div class="row">
				<div class="col-lg-6 mb-4">
					<!-- Create -->
					<div class="card shadow mb-4">
					<!-- Card Header - Accordion -->
					<a href="#update" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="update">
						<h6 class="m-0 font-weight-bold text-primary">Update (edit)</h6>
					</a>
					<!-- Card Content - Collapse -->
					<div class="collapse show" id="update">
						<div class="card-body">
						Update or edit is one of the process of data manipulation between database and website. Just like the name, it is a process to update or edit data in the database.
						For updating the data in the database, we will either use single or multiple table and column in the database. Different ways to code are use to make those process. For clearer explanation, let's see the examples below.
						
						</br></br><a href="update.php"> Single table and column &rarr;</a>
						</br><a href="updateMultiple.php"> Multiple tables and colums &rarr;</a>
						</div>
					</div>
					</div>
				</div>
				
				<div class="col-lg-6 mb-4">
					<!-- Create -->
					<div class="card shadow mb-4">
					<!-- Card Header - Accordion -->
					<a href="#delete" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="delete">
						<h6 class="m-0 font-weight-bold text-primary">Delete</h6>
					</a>
					<!-- Card Content - Collapse -->
					<div class="collapse show" id="delete">
						<div class="card-body">
						Delete is one of the process of data manipulation between database and website. Just like the name, it is a process to delete data from database.
						For deleting the data from the database, we will either use single or multiple table and column in the database. Both process use the same style of coding. However, I still make different examplesto makeyou understand it better.
						For clearer explanation, let's see the examples below.
						
						</br></br><a href="delete.php"> Single table and column &rarr;</a>
						</br><a href="deleteMultiple.php"> Multiple tables and colums &rarr;</a>
						</div>
					</div>
					</div>
				</div>
			
			</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
		
		<?php // topBar code
			include 'footer.php';
		?>
		
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
