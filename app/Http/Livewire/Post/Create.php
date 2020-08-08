<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Post;

class Create extends Component
{
	public $title;
	public $content='';

    public function store()
    {
    	$this->validate([
    		'title' => 'required',
    		'content' => 'required'
    	]);	

    	$post = Post::create([
    		'title' => $this->title,
    		'content' => $this->content
    	]);

    	session()->flash('success', 'Data berhasil disimpan');
    	return redirect()->route('post.index');
    }

    public function render()
    {
        return view('livewire.post.create');
    }

}
