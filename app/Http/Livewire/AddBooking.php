<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Booking;
use App\Driver;
use App\Vehicle;

class AddBooking extends Component
{
    public $drivers; public $vehicles;
    public $from; public $to; public $p_notes; public $d_notes; public $p_point; public $d_point; public $veh_id;
    public $j_type; public $passenger; public $luggages; public $c_name; public $tel_no; public $mobile_no;
    public $email; public $p_date; public $p_hour; public $driver_id; public $special;

    public function mount()
    {
        $this->drivers = Driver::orderBy('id', 'DESC')->get(); 
        $this->vehicles = Vehicle::orderBy('id', 'DESC')->get(); 
    }
    public function addBooking()
    {
        $this->validate([
            'from'=>'required',
            'to'=>'required',
            'p_notes'=>'required',
            'd_notes'=>'required',
            'p_point'=>'required',
            'd_point'=>'required',
            'veh_id'=>'required',
            'j_type'=>'required',
            'passenger'=>'required',
            'luggages'=>'required',
            'c_name'=>'required',
            'tel_no'=>'required',
            'mobile_no'=>'required',
            'email'=>'required',
            'p_date'=>'required',
            'p_hour'=>'required',
            'driver_id'=>'required',
            'special'=>'required',
        ]); 

        $saveBooking = Booking::create(['from' => $this->from,'to' => $this->to,'p_notes' => $this->p_notes,'d_notes' => $this->d_notes,
        'p_point' => $this->p_point,'d_point' => $this->d_point,'veh_id' => $this->veh_id,'j_type' => $this->j_type,'passenger' => $this->passenger,
        'luggages' => $this->luggages,'c_name' => $this->c_name,'tel_no' => $this->tel_no,'mobile_no' => $this->mobile_no,
        'email' => $this->email,'p_date' => $this->p_date,'p_hour' => $this->p_hour,'driver_id' => $this->driver_id,'special' => $this->special]);
        if ($saveBooking->exists) {
            session()->flash('message','Booking added successfully');
        }else {
            session()->flash('error','Booking not added please try again later');
        }
    }
    public function cancelBooking(){
        $this->from ='';$this->to ='';$this->p_notes ='';$this->d_notes ='';$this->p_point ='';$this->d_point ='';$this->veh_id ='';$this->j_type ='';
        $this->passenger ='';$this->luggages ='';$this->c_name ='';$this->tel_no ='';$this->mobile_no ='';$this->email ='';$this->p_date ='';
        $this->p_hour ='';$this->driver_id ='';$this->special ='';
    }
    public function render()
    {
        return view('livewire.add-booking');
    }
}
