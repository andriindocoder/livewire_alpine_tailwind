<div>
    <h3>User Details</h3>

    @if(session()->has('message'))
    	<div class="alert alert-success">
    		{{ session('message') }}
    	</div>
    @endif

    <form wire:submit.prevent="submit">
    	<div>
    		@if($step == 0)
    		<div class="form-group">
    			<label for="name">Name</label>
    			<input type="text" class="form-control" wire:model.lazy="name" placeholder="Name">
    			@error('name')
	    			<small class="form-text text-danger">{{ $message }}</small>
    			@enderror
    		</div>
    		@endif

			@if($step == 1)
    		<div class="form-group">
    			<label for="email">Email</label>
    			<input type="email" class="form-control" wire:model.lazy="email" placeholder="Email">
    			@error('email')
	    			<small class="form-text text-danger">{{ $message }}</small>
    			@enderror
    		</div>
    		@endif

			@if($step == 2)
    		<div class="form-group">
    			<label for="color">Favorite Color</label>
    			<input type="text" class="form-control" wire:model.lazy="color" placeholder="Favorite Color">
    			@error('color')
	    			<small class="form-text text-danger">{{ $message }}</small>
    			@enderror
    		</div>
    		@endif

    		@if($step > 2)
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Thank you for your information</h4>
						<p class="card-text">Welcome to my web {{$this->customer->name}}. Happy learning.</p>
						<a href="/">Go Home</a>
					</div>
				</div>
    		@endif
    	</div>
    	<div class="mt-2">
    		@if($step > 0 && $step <= 2)
    		<button type="button" wire:click="decreaseStep" class="btn btn-secondary mr-3">Back</button>
    		@endif
			
			@if($step <= 2)
    		<button type="submit" class="btn btn-success">Next</button>
    		@endif
    	</div>
    </form>
</div>













