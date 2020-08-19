
	<!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-cogs"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Basic Operation</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php if ($activePage =="home") {?>active<?php } ?>">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Basic operation
      </div>

      <!-- Nav Item - Create Collapse Menu -->
      <li class="nav-item <?php if ($activePage =="insert") {?>active<?php } ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInsert" aria-expanded="true" aria-controls="collapseInsert">
          <i class="fas fa-fw fa-plus"></i>
          <span>Insert</span>
        </a>
        <div id="collapseInsert" class="collapse" aria-labelledby="headingInsert" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">table & column:</h6>
            <a class="collapse-item" href="insert.php">Single</a>
            <a class="collapse-item" href="insertMultiple.php">Multiple</a>
          </div>
        </div>
      </li>
	  
	  <!-- Nav Item - Read Collapse Menu -->
      <li class="nav-item <?php if ($activePage =="read") {?>active<?php } ?>">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRead" aria-expanded="true" aria-controls="collapseRead">
          <i class="fas fa-fw fa-eye"></i>
          <span>Read</span>
        </a>
        <div id="collapseRead" class="collapse" aria-labelledby="headingRead" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">table & column:</h6>
            <a class="collapse-item" href="read.php">Single</a>
            <a class="collapse-item" href="readMultiple.php">Multiple</a>
          </div>
        </div>
      </li>
	  
	  <!-- Nav Item - Update Collapse Menu -->
      <li class="nav-item <?php if ($activePage =="update") {?>active<?php } ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUpdate" aria-expanded="true" aria-controls="collapseUpdate">
          <i class="fas fa-fw fa-edit"></i>
          <span>Update</span>
        </a>
        <div id="collapseUpdate" class="collapse" aria-labelledby="headingUpdate" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">table & column:</h6>
            <a class="collapse-item" href="update.php">Single</a>
            <a class="collapse-item" href="UpdateMultiple.php">Multiple</a>
          </div>
        </div>
      </li>
	  
	  <!-- Nav Item - Delete Collapse Menu -->
      <li class="nav-item <?php if ($activePage =="delete") {?>active<?php } ?>">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDelete" aria-expanded="true" aria-controls="collapseDelete">
          <i class="fas fa-fw fa-trash"></i>
          <span>Delete</span>
        </a>
        <div id="collapseDelete" class="collapse" aria-labelledby="headingDelete" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">table & column:</h6>
            <a class="collapse-item" href="delete.php">Single</a>
            <a class="collapse-item" href="deleteMultiple.php">Multiple</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>