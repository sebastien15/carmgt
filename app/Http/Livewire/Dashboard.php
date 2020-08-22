<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Booking;
use DB;

class Dashboard extends Component
{
    public $bookings;
    public function mount()
    {
        $this->bookings = Booking::get(); 
        // $this->bookings = Booking::orderBy('id', 'DESC')->simplePaginate(10); 
        // dd($this->bookings);
    }
    public function render()
    {
        return view('livewire.dashboard');
    }
}
