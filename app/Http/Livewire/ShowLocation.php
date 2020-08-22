<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Zone;
use App\Type;
use App\Location;

class ShowLocation extends Component
{
    public $zones;
    public $types;
    public $name;
    public $type_id;
    public $address;
    public $code;
    public $zone_id;
    public $charge;

    public function mount(){
        $allzone = Zone::all();
        $alltype = type::all();
        $this->zones = $allzone;
        $this->types = $alltype;
    }

    public function addLocation(){
        $this->validate([
            'zone_id'=>'required',
            'type_id'=>'required',
            'name'=>'required',
            'address'=>'required',
            'code'=>'required',
            'charge'=>'required',
        ]); 
        $saved = Location::create(['name' => $this->name,'type_id' => $this->type_id,'address' => $this->address,'code' => $this->code,'zone_id' => $this->zone_id,'charge' => $this->charge]);
        $name ="";$type_id="";$address="";$code="";$zone_id="";$charge="";
        if ($saved->exists) {
            $this->name=""; $this->type_id=""; $this->address=""; $this->code=""; $this->zone_id=""; $this->charge="";
            session()->flash('success','location added successfully');
        }else{
            session()->flash('error','location NotAdded please try again');
        }
    }

    public function render()
    {
        return view('livewire.show-location');
    }
}
