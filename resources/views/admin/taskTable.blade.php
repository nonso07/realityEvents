<?php  //include('../config.php'); ?>
<?php  //include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php 
	// Get all admin users from DB
	/*$admins = getAdminUsers();
	$roles = ['Admin', 'Author'];	*/			
?>
<?php //include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
@include('include.head_section')
	<title>Admin | Manage Event Task Table  </title>
</head>
<body>
	<!-- admin navbar -->
    <?php// include(ROOT_PATH . '/admin/includes/navbar.php') ?>
    @include('admin.navbar')
	<div class="container content">
		<!-- Left side menu -->
        <?php //include(ROOT_PATH . '/admin/includes/menu.php') ?>
        @include('include.menu')
		<!-- Middle form - to create and edit  -->
		<div class="action">
			<h1 class="page-title">Event task tabel</h1>
  {{$out_task}}
			<table style="width: 100%">
				<tr>
					<td><strong>#No.</strong></td>
					<td><strong>Event Task</strong></td>
					<td><strong>Status</strong></td>
					<td><strong>Price</strong></td>
					<td><strong>Catigory</strong></td>
					<td><strong>Mode</strong></td>
				</tr>
			{{--	@foreach ($collection as $item)--}}
					
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				{{--@endforeach--}}
			</table>
			
		</div>
		<!-- // Middle form - to create and edit -->

		<!-- Display records from DB-->
		<div class="table-div">
			<!-- Display notification message -->
		<!-- // Display records from DB -->
	</div>
</body>
</html>