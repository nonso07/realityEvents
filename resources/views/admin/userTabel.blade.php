<?php  //include('../config.php'); ?>
<?php  //include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php 
	// Get all admin users from DB
	/*$admins = getAdminUsers();
	$roles = ['Admin', 'Author'];	*/			
?>
<?php //include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
@include('include.head_section')
	<title>Admin | Manage users</title>
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
			<h1 class="page-title">Event Gallery update</h1>

			<form method="post" action="{{ '/photo' }}" enctype="multipart/form-data" >
				{{csrf_field()}}
				<?php
include('database.php');

				$userTable= Auth::user();
                
				?>
				{{ $userTable }}
				<table class="auto-style1" style="width: 100%">
						<tr>
							<td>S/N</td>
							<td style="width: 159px">Users Name</td>
							<td>E-mail Address</td>
							<td>Phone Number</td>
							<td>Reg. Date</td>
						</tr>
						<tr bgcolor="#FFFFFF">
							<td>&nbsp;</td>
							<td style="width: 159px">&nbsp;</td>
							<td>{{ Auth::user()->name }}</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					</table>
		</div>
		<!-- // Middle form - to create and edit -->

		<!-- Display records from DB-->
		<div class="table-div">
			<!-- Display notification message -->
			<table class="auto-style1" style="width: 100%">
					<tr>
						<td>S/N</td>
						<td style="width: 159px">Users Name</td>
						<td>E-mail Address</td>
						<td>Phone Number</td>
						<td>Reg. Date</td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td>&nbsp;</td>
						<td style="width: 159px">&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				</table>
				
		<!-- // Display records from DB -->
	</div>
</body>
</html>