<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;
use App\Vehicle;                    
use App\Driver;

class AddDriver extends Component
{

    public $image;public $name;public $types; public $drivers;
    public $pda_pass; public $pda_mobile ; public $rent; public $driver_no ; public $active ; public $has_pda ; public $driver_name ; 
    public $driver_lName ; public $email ; public $tel_no ; public $address ; public $date_of_birth ; public $mobile_no ; public $Ni ;
    public $driver_type ; public $monthly_rent ; public $profile_image ; public $vehicle_make ; public $assigned_on ; public $end_on ; 
    public $vehicle_type ; public $vehicle_color ; public $vehicle_no ; public $owner ; public $vehicle_model ; public $available_on ; 
    public $end_at ;

    protected $listeners = ['fileUpload'=>'handleFileUpload','clearFile'];

    public function clearFile(){
        $this->image = '';
    }
    public function handleFileUpload($imageData)
    {
        $this->image = $imageData;
        $this->profile_image = $imageData;
    }
    public function mount(){
        $this->drivers = Driver::orderBy('id','DESC')->get();
        $this->types = Vehicle::all();
    }

    public function addDriver(){

        $Hpdapass = Hash::make($this->pda_pass);
        $this->saveImage();
        $this->profile_image = $this->name;
        $saved = Driver::create(['pda_mobile' =>$this->pda_mobile,'pda_pass' =>$Hpdapass,'rent' =>$this->rent,'driver_no' =>$this->driver_no,'active' =>$this->active,
            'has_pda' =>$this->has_pda,'driver_name' =>$this->driver_name,'driver_lName' =>$this->driver_lName,'email' =>$this->email,'tel_no' =>$this->tel_no,
            'address' =>$this->address,'date_of_birth' =>$this->date_of_birth,'mobile_no' =>$this->mobile_no,'Ni' =>$this->Ni,'driver_type' =>$this->driver_type,
            'monthly_rent' =>$this->monthly_rent,'profile_image' =>$this->profile_image,'vehicle_make' =>$this->vehicle_make,'assigned_on' =>$this->assigned_on,
            'end_on' =>$this->end_on,'vehicle_type' =>$this->vehicle_type,'vehicle_color' =>$this->vehicle_color,'vehicle_no' =>$this->vehicle_no,
            'owner' =>$this->owner,'vehicle_model' =>$this->vehicle_model,'available_on' =>$this->available_on,'end_at' =>$this->end_at
        ]);
        if ($saved->exists) {
            session()->flash('message','Driver added successfully');
        }else{
            session()->flash('message','Driver Not Added');
        }
    }
    public function saveImage()
    {
        if (!$this->image) {
            return null;
        }

        $img = ImageManagerStatic::make($this->image)->encode('jpg');
        $this-> name = Str::random().'.jpg';
        Storage::disk('public')->put($this->name, $img);
    }
    public function render()
    {
        return view('livewire.add-driver');
    }
}
