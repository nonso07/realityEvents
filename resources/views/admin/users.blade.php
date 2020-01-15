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

				<!-- if editing user, the id is required to identify that user -->
				<?php //if ($isEditingUser === true): ?>
				<input type="text" name="title" placeholder="Image Titel" required='add titel'>
				<?php //endif ?>

				<textarea name="body" placeholder="Discription of the image""></textarea> 
				
				<select name="catigory">
					<option value="" selected disabled>image catigory</option>
					                <option value="cake">cake</option>
                                    <option value="decoration">Decouration</option>
                                    <option value="undertaker">pal bear/Undertakers</option>
                                    <option value="casket">casket</option>
                                    <option value="makeOver">Makeover/makeup</option>
                                    <option value="catering"> Catering</option>
                                    <option value="amblance"> Amblance</option>      
                                    <option value="usherSecurity">Usher/ event scurity </option>                                   
                                    <!-- <option value="catering"></option>-->
								  </select>

								  <input type="text" name="model" class="form-control" placeholder="Image model" required='add titel'> 				  
								  <input type="file" name="image" class="form-control" required > 
			


				<!-- if editing user, display the update button instead of create button -->
				<?php// if ($isEditingUser === true): ?> 
					<button type="submit" class="btn" name="submit">POST</button>
				<?php //else: ?>
				<!--	<button type="submit" class="btn" name="create_admin">Save User</button>-->
				<?php// endif ?>
			</form>
		</div>
		<!-- // Middle form - to create and edit -->

		<!-- Display records from DB-->
		<div class="table-div">
			<!-- Display notification message -->
		<!-- // Display records from DB -->
	</div>
</body>
</html>