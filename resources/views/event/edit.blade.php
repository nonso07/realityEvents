<?php  //include('../config.php'); ?>
<?php  //include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
<?php 
	// Get all admin users from DB
	/*$admins = getAdminUsers();
	$roles = ['Admin', 'Author'];	*/			
?>
<?php //include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
@include('include.head_section')
	<title>Admin | Manage Event Task </title>
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
			<h1 class="page-title">Event component update</h1>
{{$out_photo}}
			
				<!-- editing form -->
				<form action="{{url('/photo', [$out_photo->id])}}" method="POST"  >
					{{--method_field('PUT')--}}
					<input type="hidden" name="_method" value="PUT">
				{{csrf_field()}}

				<!-- if editing user, the id is required to identify that user -->
				<?php //if ($isEditingUser === true): ?>
				<input type="text" name="title" placeholder="Image Titel" value='{{$out_photo->title}}' >
				<?php //endif ?>

				<textarea name="body" placeholder="Discription of the image"  >{{$out_photo->body}}</textarea>
				<!--<input type="curency" name="price" placeholder="Price of task in naira" >-->
				<select name="catigory">
					<option value="" selected disabled>{{$out_photo->catigory}}</option>
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
								  
								  <input type="text" name="model" class="form-control" placeholder="Image model" value='{{$out_photo->model}}'> 				  
								{{--}}  <input type="file" name="image" class="form-control" value="{{ $out_photo->image }}" multiple />--}} 
								  <input type="hidden" name="old" value="{{$out_photo->image}}">

				

				<!-- if editing user, display the update button instead of create button -->
				<?php// if ($isEditingUser === true): ?> 
					<button type="submit" class="btn" name="submit" value="submit">Update</button>
				<?php //else: ?>
				<!--	<button type="submit" class="btn" name="create_admin">Save User</button>-->
				<?php// endif ?>
			</form>
		</div>
		<!-- // Middle form - to create and edit -->

		<!-- Display records from DB-->
		<div class="table-div">
			<!-- Display notification message -->
			<form action="{{url('/photo', [$out_photo->id])}}" method="POST" enctype="multipart/form-data" >
				{--method_field('PUT')--}
				<input type="hidden" name="_method" value="PUT">
			{{csrf_field()}}


				<!-- if editing user, the id is required to identify that user -->
				<?php //if ($isEditingUser === true): ?>
				<input type="text" name="title" placeholder="Image Titel" value='{{$out_photo->title}}'>
				<?php //endif ?>

				<textarea name="body" placeholder="Discription of the image"">{{$out_photo->body}}</textarea> 
				
				<select name="catigory">
					<option value="" selected disabled>{{$out_photo->catigory}}</option>
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

								  <input type="text" name="model" class="form-control" placeholder="Image model" value='{{$out_photo->model}}'> 				  
								  <input type="file" name="image" class="form-control" value='{{$out_photo->image}}' > 
			


				<!-- if editing user, display the update button instead of create button -->
				<?php// if ($isEditingUser === true): ?> 
					<button type="submit" class="btn" name="photoUpload" value="photoEdit">Edit photo</button>
				<?php //else: ?>
				<!--	<button type="submit" class="btn" name="create_admin">Save User</button>-->
				<?php// endif ?>
			</form> 

		
			
				<?php //else: ?>
				<!--	<button type="submit" class="btn" name="create_admin">Save User</button>-->
				<?php// endif ?>
			</form>
		
	</div>
</body>
</html>