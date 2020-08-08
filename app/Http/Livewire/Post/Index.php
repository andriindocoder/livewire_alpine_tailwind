<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use Livewire\WithPagination;
use App\Post;

class Index extends Component
{
	use WithPagination;

	// public $posts;

    public function render()
    {
    	// $this->posts = Post::latest()->paginate(10);

        return view('livewire.post.index', [
        	'posts' => Post::latest()->paginate(5)
        ]);
    }
}
