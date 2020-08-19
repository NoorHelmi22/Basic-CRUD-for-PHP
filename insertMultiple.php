<!DOCTYPE html>
<html lang="en">

<head>
	<?php // header code
		include 'header.php';
	?>
</head>

<body id="page-top">
	
	<?php
		$activePage = "insert";
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
          <h1 class="h3 mb-2 text-gray-800">Insert (Multiple table and column)</h1>
          <p class="mb-4">Insert in PHP MySQL is a process to insert data into the database. More explanation at <a target="_blank" href="https://www.tutorialrepublic.com/php-tutorial/php-mysql-insert-query.php">TutorialRepublic (INSERT)</a>.</p>

          <!-- Inseert form card -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Example form for inserting process</h6>
            </div>
            <div class="card-body">
				<div class="text-center">
					<h1 class="h4 text-gray-900 mb-4">Fill the form</h1>
				</div>
				<form class="user" action="insertMultipleProcess.php" method="post">
					
					<div class="form-group row">
						<div class="col-sm-6 mb-3 mb-sm-0">
						<input type="text" class="form-control form-control-user" name="form1" placeholder="Name (form1)">
						</div>
						
						<div class="col-sm-6">
						<input type="text" class="form-control form-control-user" name="form2" placeholder="Age (form2)">
						</div>
					</div>
					
					<div class="form-group row">
						<div class="col-sm-6 mb-3 mb-sm-0">
						<input type="text" class="form-control form-control-user" name="form3" placeholder="Your Favourite Food (form3)">
						</div>
						
						<div class="col-sm-6">
						<input type="text" class="form-control form-control-user" name="form4" placeholder="Age Favourite Drink (form4)">
						</div>
					</div>
					
					<div class="form-group row justify-content-center">
					<div class="form-group">
					<a href="javascript:window.location.reload();" class="btn btn-warning">
						Reset
					</a>
					<input type="submit" value="Insert" class='btn btn-primary'>
					</div>
					</div>
              </form>
			  
          </div>

        </div>
		
		<!-- SQL card-->
		<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">SQL query</h6>
            </div>
			<div class="card-body">
				<div class="text-center">
					<code <p> INSERT INTO tablename (column1, column2, column3) VALUES ('$data1', '$data2', '$data3') </p> </code>
				</div>
			</div>
		</div>
		
		<!--full code card-->
		<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Full example code for inserting process</h6>
            </div>
			<div class="card-body">
					
				<code><span style="color: #000000">
				<span>&lt;?php</span>
				<br />
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">//link to "config.php" file to connect with database</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>include 'config.php';</span>
				<br />
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">//declare every input that want to use from the form</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>$data1 = $_POST['form1'];</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>$data2 = $_POST['form2'];</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>$data3 = $_POST['form3'];</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>$data4 = $_POST['form4'];</span>
				<br />
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">//First sql query for inserting the input data to database on first table</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>$sql="INSERT INTO tablename2 (name, age) VALUES ('$data1', '$data2')";</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">//Second sql query for inserting the input data to database on second table</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>$sql2="INSERT INTO tablename3 (name, favouritefood, favouritedrink) VALUES ('$data1', '$data3', '$data4')";</span>
				<br />
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">//process to insert the data into db</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>if ($conn-&gt;query($sql) === TRUE) {</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>if ($conn-&gt;query($sql2) === TRUE) {</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&nbsp;echo&nbsp;"&lt;script&gt;alert('Successfully insert the data');document.location.href='read.php';&lt;/script&gt;";&lt;/span&gt;</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>}</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>else {</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>echo&nbsp;"Error:&nbsp;"&nbsp;.&nbsp;$sql&nbsp;.&nbsp;"&lt;br&gt;"&nbsp;.&nbsp;$conn-&gt;error;&lt;/span&gt;
				<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>}</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>}</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>else {</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>echo&nbsp;"Error:&nbsp;"&nbsp;.&nbsp;$sql&nbsp;.&nbsp;"&lt;br&gt;"&nbsp;.&nbsp;$conn-&gt;error;&lt;/span&gt;
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>}</span>
				<br />
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>$conn->close();</span>
				<br />
				<br /><span>?></span>
				</code>
					
			</div>
		</div>

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
