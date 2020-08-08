<div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@if(session()->has('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
				@endif
				<a href="{{ route('post.create') }}" class="btn btn-success btn-md mb-3">Tambah</a >
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
				      <td class="text-center">
				      	<a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
				      	<button wire:click="destroy({{ $post->id }})" class="btn btn-danger btn-sm">Delete</a>
				      </td>
				    </tr>
				    @endforeach
				  </tbody>
				</table>
			</div>
		</div>
	</div>
</div>
