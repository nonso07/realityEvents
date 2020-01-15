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
<table class="auto-style1" style="width: 100%">

	<tr>
		<td style="width: 37px"><strong>S/N</strong></td>
		<td><strong>Title</strong></td>
		<td><strong>Discription</strong></td>
		<td><strong>Catigory</strong></td>
		<td><strong>Model</strong></td>
		<td>I<strong>Image</strong></td>
        <td><strong>Date</strong></td>
        <td><strong>Action</strong></td>
    </tr>
    @if (count($out_photo)> 0)
    @foreach ($out_photo as $out_photos)
	<tr>
		<td style="width: 37px"></td>
		<td>{{ $out_photos->title}}</td>
		<td>{{ $out_photos->body}}</td>
		<td>{{ $out_photos->catigory}}</td>
		<td>{{ $out_photos->model}}</td>
		<td><img alt="" src="storage/services_photo/{{ $out_photos->image}}" width="90%">;</td>
        <td>{{ $out_photos->created_at}}</td>
        <td><a href="/photo/{{ $out_photos->id}}"> <button>Delete</button> </a> <br>
            <a href="photo/{{ $out_photos->id}}/edit"><button>Edit</button></a> <br>
            <button><a href="/photo/{{ $out_photos->id}}" >View</a></button> 
        </td>
    </tr>
    @endforeach
</table>
<div  class="pagination-bar text-center">
   <span> {{ $out_photo->links()}} </span>
</div>
@else 
				<p> <h2> Sorry, no record in this table . </h2>  </p>
				@endif

    </div>
    
	</div>
</body>

</html>