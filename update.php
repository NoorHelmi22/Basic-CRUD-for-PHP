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

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Update (Single table and column)</h1>
          <p class="mb-4">The UPDATE statement is used to change or modify the existing records in a database table. More explanation at <a target="_blank" href="https://www.tutorialrepublic.com/php-tutorial/php-mysql-update-query.php">TutorialRepublic (UPDATE)</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Update data</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				
					<?php // Connects to your Database 
				
						include 'config.php';
						 
						$data = "SELECT * FROM tablename1";
						$result = $conn->query($data);
					?>
                  <thead>
                    <tr>
                      <th>Data store in table</th>
                      <th>Action button</th>
                    </tr>
                  </thead>
                  <tbody>
					<?php
						while($info = $result->fetch_assoc()) {
					?>
							<tr>
								<td><?php echo $info['columnName']; ?></td>
								
								<td>
									<form action="updateForm.php" method="POST">
									<input type='hidden' value='<?php echo $info['columnName']; ?>' name='attributeName'>
									<input type='submit' value='Update' class='btn btn-success'> 
									</form>
								</td>
								</td>
							</tr>
					<?php
						}
					?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
		  
		<!-- SQL query card-->
		<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">SQL query</h6>
            </div>
			<div class="card-body">
				<div class="text-center">
					<code <p> UPDATE tablename SET columnName='$newData' WHERE columnName='$originalData' </p> </code>
				</div>
			</div>
		</div>
		<!-- end of SQL query card-->
		
		<!--full code card-->
		<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Full example code for updating process</h6>
            </div>
			<div class="card-body">
					
				<code><span style="color: #000000">
				<span>&lt;?php</span>
				<br />
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">//link to "config.php" file to connect with database</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>include 'config.php';</span>
				<br />
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">//declare every input that want to use from the form</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>$newData = $_POST['newData'];</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>$originalData = $_POST['originalData'];</span>
				<br />
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">//sql query for updating the data in the database</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>$QueryResult="UPDATE tablename1 SET columnName='$newData' WHERE columnName='$originalData'";</span>
				<br />
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #0000BB">//process to update the data in the db</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>if ($conn-&gt;query($QueryResult) === TRUE) {</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>&nbsp;echo&nbsp;"&lt;script&gt;alert('Update Success!');document.location.href='update.php';&lt;/script&gt;";&lt;/span&gt;</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>} else {</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>&nbsp;echo&nbsp;"&lt;script&gt;alert('Update not Success!');document.location.href='updateForm.php';&lt;/script&gt;";&lt;/span&gt;</span>
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>}</span>
				<br />
				<br />&nbsp;&nbsp;&nbsp;&nbsp;<span>$conn->close();</span>
				<br />
				<br /><span>?></span>
				</code>
					
			</div>
		</div>
		<!--end of full code card-->

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
