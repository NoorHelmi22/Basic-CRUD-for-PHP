<!DOCTYPE html>
<html lang="en">

<head>
	<?php // header code
		include 'header.php';
	?>
</head>

<body id="page-top">
	
	<?php
		$activePage = "update";
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
		
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Update form</h6>
            </div>
            <div class="card-body">
				<div class="text-center">
					<h1 class="h4 text-gray-900 mb-4">Update time</h1>
				</div>
				<form class="user" action="updateProcess.php" method="post">
					<?php // Connects to your Database 
				
						include 'config.php';
						$selectedDataStore = $_POST['attributeName'];

						$data = "SELECT * FROM tablename1 WHERE columnName='$selectedDataStore'";
						$result = $conn->query($data);
						$row1 = $result->fetch_assoc();
					?>
					
					<div class="form-group row justify-content-center">
					<div class="form-group">
					  <input type="text" name="newData" value="<?php echo $row1['columnName'];?>" class="form-control form-control-user">
					  <input type="hidden" name="originalData" value="<?php echo $row1['columnName'];?>" class="form-control form-control-user">
					</div>
					</div>
					
					<div class="form-group row justify-content-center">
					<a href="update.php" class="btn btn-primary">
						Back
					</a>
					<a href="javascript:window.location.reload();" class="btn btn-warning">
						Reset
					</a>
					<input type="submit" value="Update" class='btn btn-success'>
					</div>
              </form>
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
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
