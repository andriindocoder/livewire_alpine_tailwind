<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Todo;

class Todos extends Component
{
	public $title = '';

    public function render()
    {
        return view('livewire.todos', [
        	'todos' => auth()->user()->todos
        ]);
    }

    public function addTodo()
    {
    	$this->validate([
    		'title' => 'required',

    	]);	
    	
    	Todo::create([
    		'user_id' => auth()->user()->id,
    		'title' => $this->title,
    		'completed' => false,
    	]);

    	$this->title = '';
    }
}
