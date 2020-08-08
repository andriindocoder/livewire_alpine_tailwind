<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Customer;

class Multiform extends Component
{
	public $name;
	public $email;
	public $gender;
	public $color;

	public $step;
	public $customer;

	private $stepActions = [
		'submit1', 'submit2', 'submit3'
	];

	public function mount()
	{
		$this->step = 0;
	}

	public function increaseStep()
	{
		$this->step++;
	}

	public function decreaseStep()
	{
		$this->step--;
	}

    public function render()
    {
        return view('livewire.multiform');
    }
}













