<?php  //include('../config.php'); ?>
	 <?php // include(ROOT_PATH . '/admin/includes/admin_functions.php'); ?>
    <?php// include(ROOT_PATH . '/admin/includes/head_section.php'); ?>
    @include('include.head_section')

	<title>Admin | Dashboard</title>
</head>
<body>
	<!--<div class="header">-->
			@include('admin.navbar')
	

    {{--@include('include.menu')--}}
	<div class="container dashboard">
		<h1>Welcome</h1>
		<div class="stats">
			<a href="/userTabel" class="first">
				<span>43</span> <br>
				<span>Registered users</span>
			</a>
			<a href="/users">
				<span>43</span> <br>
				<span>Published posts</span>
			</a>
			<a>
				<span>43</span> <br>
				<span>Published comments</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons">
			<a href="/users">Add gallary</a>
			<a href="posts.php">Add Posts</a>
		</div>
	</div>
</body>
</html>