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

			<form method="POST" action="{{ "/task" }}"  >
				{{csrf_field()}}

				<!-- if editing user, the id is required to identify that user -->
				<?php //if ($isEditingUser === true): ?>
				<input type="text" name="eventTask" placeholder="event task" required=''>
				<?php //endif ?>

				<input type="text" name="status" placeholder="status" >
				<!--<input type="curency" name="price" placeholder="Price of task in naira" >-->
				<label> Event price </label>
				 
		        <input type="number" name="price" placeholder="Price of task in naira" class="form-control bfh-number" style="width: 187px; height: 47px">
				<select name="catigory">
					<option value="" selected disabled>Event catigory</option>
					                <option value="wedding">wedding</option>
                                    <option value="anniversaries">Anniversaries</option>
                                    <option value="Birthdays">Birthdays</option>
                                    <option value="Graduations">Graduations</option>
                                    <option value="burial Receptions">Burial Receptions </option>
                                    <option value="Trainings"> Trainings</option>
                                   <!-- <option value="amblance"> Amblance</option>      
                                    <option value="usherSecurity">Usher/ event scurity </option>                                   
                                     <option value="catering"></option>-->
								  </select>
				<select name="mode">
					<option value="" selected disabled>pricing mode</option>
					                <option value="normal">Normal</option>
                                    <option value="platuiim">Platuim</option>
                                    <option value="gold">Gold</option>
                                    
                                   <!-- <option value="amblance"> Amblance</option>      
                                    <option value="usherSecurity">Usher/ event scurity </option>                                   
                                     <option value="catering"></option>-->
								  </select>


				

				<!-- if editing user, display the update button instead of create button -->
				<?php// if ($isEditingUser === true): ?> 
					<button type="submit" class="btn" name="submit" value="submit">POST</button>
				<?php //else: ?>
				<!--	<button type="submit" class="btn" name="create_admin">Save User</button>-->
				<?php// endif ?>
			</form>
		</div>
		<!-- // Middle form - to create and edit -->

		<!-- Display records from DB-->
		<div class="table-div">
			<!-- Display notification message -->
		
			<table style="width: 100%">
				<tr>
					<td><strong>#No.</strong></td>
					<td><strong>Event Task</strong></td>
					<td><strong>Status</strong></td>
					<td><strong>Price</strong></td>
					<td><strong>Catigory</strong></td>
					<td><strong>Mode</strong></td>
				</tr>
				@php
					$count=1
				@endphp  
				
				@foreach ($out_task as $out_tasks)
					
				<tr>
					<td>{{$count++}}</td>
					<td> {{$out_tasks->eventTask}} </td>
					<td>{{$out_tasks->statu}}</td>
					<td>{{$out_tasks->price}}</td>
					<td>{{$out_tasks->catigory}}</td>
					<td>{{$out_tasks->mode}}</td>
					
				</tr>
				@endforeach
			</table>
		<!-- // Display records from DB -->
		<form method="POST" action="{{ "/task" }}"  >
			{{csrf_field()}}

			<select name="eventCatigory">
				<option value="" selected disabled>Event catigory</option>
								<option value="wedding">wedding</option>
								<option value="anniversaries">Anniversaries</option>
								<option value="Birthdays">Birthdays</option>
								<option value="Graduations">Graduations</option>
								<option value="burial Receptions">Burial Receptions </option>
								<option value="Trainings"> Trainings</option>
							   <!-- <option value="amblance"> Amblance</option>      
								<option value="usherSecurity">Usher/ event scurity </option>                                   
								 <option value="catering"></option>-->
							  </select>
							  <select name="mod">
								<option value="" selected disabled>pricing mode</option>
												<option value="normal">Normal</option>
												<option value="platuiim">Platuim</option>
												<option value="gold">Gold</option>
												
											   <!-- <option value="amblance"> Amblance</option>      
												<option value="usherSecurity">Usher/ event scurity </option>                                   
												 <option value="catering"></option>-->
											  </select>
			

		<!--	<input type="text" name="status" placeholder="status" >-->
			<button type="submit" class="btn" name="see" value="viewAll">view</button>
				<?php //else: ?>
				<!--	<button type="submit" class="btn" name="create_admin">Save User</button>-->
				<?php// endif ?>
			</form>
		
	</div>
</body>
</html>