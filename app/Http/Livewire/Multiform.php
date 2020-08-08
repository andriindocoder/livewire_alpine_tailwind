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

	public function decreaseStep()
	{
		$this->step--;
	}

    public function render()
    {
        return view('livewire.multiform');
    }

    public function submit() 
    {
    	$action = $this->stepActions[$this->step];
    	$this->$action();
    }

    public function submit1()
    {
    	$this->validate([
    		'name' => 'required|min:4',
    	]);

    	if($this->customer) {
    		$this->customer = tap($this->customer)->update(['name' => $this->name]);
    		session()->flash('message', 'Customer successfully updated.');
    	}else{
    		$this->customer = Customer::create(['name' => $this->name]);
    		session()->flash('message', 'Customer successfully created.');
    	}

    	$this->step++;
    }

    public function submit2()
    {
    	$this->validate([
    		'email' => 'required|email',
    	]);

    	$this->customer = tap($this->customer)->update(['email' => $this->email]);
    	
    	$this->step++;
    }

    public function submit3()
    {
    	$this->validate([
    		'color' => 'required',
    	]);

    	$this->customer = tap($this->customer)->update(['color' => $this->color]);
    	
    	session()->flash('message', 'Color added ' . $this->customer->name);

    	$this->step++;
    }
}













