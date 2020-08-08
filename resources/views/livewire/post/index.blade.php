<div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<button href="{{ route('post.create') }}" class="btn btn-success btn-md mb-3">Tambah</button>
				<table class="table">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Title</th>
				      <th scope="col">Content</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($posts as $post)
				    <tr>
				      <td>{{ $post->title }}</td>
				      <td>{{ $post->content }}</td>
				      <td>
				      	
				      </td>
				    </tr>
				    @endforeach
				  </tbody>
				</table>
			</div>
		</div>
	</div>
</div>
