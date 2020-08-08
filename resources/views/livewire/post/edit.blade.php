<div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form wire:submit.prevent="update">
					<input type="hidden" wire:model="postId">
					<div class="form-group">
						<label for="title">Judul</label>
						<input class="form-control @error('title') is-invalid @enderror" type="text" wire:model.lazy="title" placeholder="Masukkan Judul Artikel">
						@error('title')
							<span style="color:red;">{{ $message }}</span>
						@enderror
					</div>
					<div class="form-group">
						<label for="content">Konten</label>
						<textarea class="form-control @error('content') is-invalid @enderror" rows="4" placeholder="Masukkkan Konten Artikel" wire:model.lazy="content">{{ $content }}</textarea>
						@error('content')
							<span style="color:red;">{{ $message }}</span>
						@enderror
					</div>
					<button type="submit" class="btn btn-success btn-md">Update</button>
				</form>				
			</div>
		</div>
	</div>
</div>
