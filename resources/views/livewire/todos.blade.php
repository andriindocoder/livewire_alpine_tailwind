<div>
	<div>

		<div class="mb-4">
			<input type="text" name="addTodo" class="form-control form-control-lg" id="addTodo" placeholder="What needs to be done?" wire:model="title" wire:keydown.enter="addTodo">
			{{-- <button wire:click="addTodo" class="btn btn-primary" type="submit">Add</button> --}}
			@error('title')
			   <div style="color: red;">{{ $message }}</div>
			@enderror

		</div>

		<ul class="list-group">
			@foreach($todos as $todo)
				<li class="list-group-item d-flex justify-content-between align-items-center">
					<div>
						<input type="checkbox" class="mr-2">
						<a href="#" class="">{{ $todo->title }}</a>
					</div>
					<div>
						<form action="#" method="POST">
							@csrf
							<button class="btn btn-sm btn-danger">&times;</button>
						</form>
					</div>
				</li>
			@endforeach
		</ul>
	</div>
</div>
