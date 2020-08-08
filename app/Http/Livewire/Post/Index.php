<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use Livewire\WithPagination;
use App\Post;

class Index extends Component
{
	use WithPagination;

	// public $posts;
	public $search;

	protected $updatesQueryString = ['search'];

	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		if($post){
			$post->delete();
		}

		session()->flash('success', 'Data berhasil dihapus	');
    	return redirect()->route('post.index');
	}

    public function render()
    {
    	// $this->posts = Post::latest()->paginate(10);
        return view('livewire.post.index', [
        	'posts' => $this->search == null ? Post::latest()->paginate(10) : Post::where('title', 'like', '%'. $this->search . '%')
        			->orWhere('content', 'like', '%'. $this->search . '%')
        			->latest()
        			->paginate(10)
        ]);
    }
}
