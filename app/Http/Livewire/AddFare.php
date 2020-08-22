<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Location;
use App\Type;
use App\Vehicle;
use App\Fare;

class AddFare extends Component
{
    public $vehicles;
    public $value;public $veh_id; public $company_wise; public $fare;
    public $Flocations; public $types; public $Tlocations;
    public $fType; public $cType; public $cLoc; 
    public $Tfare=[];
    public $Ffare=[];
    public $countFfare;
    public $countTfare;
    public $fares;
    public $testId1;
    public $testId2;

    protected $listeners = ['newTLocation','newFLocation'];
    public function addFfare(){
        $locName = Location::where('id', $this->cLoc)->first();
        $this->Ffare[] = ['id'=>$this->cLoc,'name'=>$locName['name']];
        $this->countFfare = count($this->Ffare);
    }
    public  function delAllFfare(){
        $this->Ffare=[];
    }
    public function addTfare(){
        $locName = Location::where('id', $this->cLoc)->first();
        $this->Tfare[] = ['id'=>$this->cLoc,'name'=>$locName['name']];
        $this->countTfare = count($this->Tfare);
    }
    public  function delAllTfare(){
        $this->Tfare=[];
    }
    public function newTLocation(){
        $this->Tlocations = Location::where('type_id', $this->cType)->get();
    }
    public function newFLocation(){
        $this->Flocations = Location::where('type_id', $this->fType)->get();
    }
    public function mount()
    {
        $this->Flocations = Location::orderBy('id', 'DESC')->get();
        $this->Tlocations = Location::orderBy('id', 'DESC')->get();
        $this->vehicles = Vehicle::all();
        $this->types = Type::orderBy('id', 'DESC')->get();
        $this->fares = Fare::orderBy('id', 'DESC')->get();
    }
    public function addFare()
    {
        $this->validate([
            'veh_id'=>'required',
            'fare'=>'required',
        ]);

        if ($this->countFfare>0) {
            if ($this->countFfare != $this->countTfare ) {
                session()->flash('error', 'Location from and location to count must be equal');
                return;
            }else {
                for ($i=0; $i < $this->countFfare; $i++) { 
                    $saveFare = Fare::create(['veh_id' => $this->veh_id,'company_wise' => $this->company_wise,'Floc_id' => $this->Ffare[$i]['id'],'Tloc_id'
                    => $this->Tfare[$i]['id'],'fare' => $this->fare]);
                    $this->fares = Fare::orderBy('id', 'DESC')->get();
                    if ($saveFare->exists) {
                        session()->flash('message', 'Fare added successfully');
                    }else {
                        session()->flash('error', 'Fare not added please try again');
                    }
                }   
            }          
        }
    }
    public function deleteFare($id)
    {
        $fare = Fare::where('id', $id)->firstOrFail();
        $fare->delete();
        $this->fares = Fare::orderBy('id', 'DESC')->get();
        session()->flash('message', 'Fare deleted successfully');
    }
    public function render()
    {
        return view('livewire.add-fare');
    }
}
