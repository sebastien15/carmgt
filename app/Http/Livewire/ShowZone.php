<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Zone;

class ShowZone extends Component
{
    public $zones;
    public $name;
    public $post_code;
    
    public function mount(){
        $allzone = Zone::all();
        $this->zones = $allzone;
    }

    public function addZone(){
        $this->validate([
            'name'=>'required',
            'post_code'=>'required',
        ]);
        $saved = Zone::create(['name'=> $this->name,'post_code'=>$this->post_code]);
        if ($saved->exists) {
            $this->name=""; $this->type_id=""; $this->address=""; $this->code=""; $this->zone_id=""; $this->charge="";
            session()->flash('success','Zone added successfully');
        }else{
            session()->flash('error','Zone NotAdded please try again');
        }
    }
    public function render()
    {
        return view('livewire.show-zone');
    }
}
