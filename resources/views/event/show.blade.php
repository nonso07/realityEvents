{{$out_photo}}
@include('include.head_section')
	<title>Admin | Manage users</title>
</head>
<body>
    @include('admin.navbar')
	<div class="container content">
		<!-- Left side menu -->
        <?php //include(ROOT_PATH . '/admin/includes/menu.php') ?>
        @include('include.menu')
        <div class="table-div">
			<!-- Display notification message -->
			<table cellpadding="0" style="width: 100%">
				<tr>
					<td style="width: 110px"><b>Title</b></td>
					<td>{{$out_photo->title}} </td>
				</tr>
				<tr>
					<td style="width: 110px"><b> Description</b> </td>
					<td> {{$out_photo->body}} </td>
				</tr>
				<tr>
					<td style="width: 110px"><b> Catigory</b> </td>
				<td> {{ $out_photo->catigory}}</td>
				</tr>
				<tr>
					<td style="width: 110px"><b> model </b></td>
					<td> {{ $out_photo->model}} </td>
				</tr>
				<tr>
						<td style="width: 110px; height: 57px"><b> Image </b></td>
						<td style="height: 57px"><img alt="" src="/storage/services_photo/{{ $out_photo->image}}" class="auto-style1" />&nbsp;</td>
				
				</tr>
				<tr>
					<td style="width: 110px">Date of post</td>
					<td>{{ $out_photo->created_at}}</td>
				</tr>
				<tr>
					<td style="width: 110px">&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
			</table>
<div  class="pagination-bar text-center">
   
</div>

				
				

    </div>
    
	</div>
</body>

</html>