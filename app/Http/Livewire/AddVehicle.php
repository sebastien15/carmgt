<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Vehicle;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;

class AddVehicle extends Component
{
    // INSERT INTO `vehicles`(`id`, `vehicle_type`, `noofpassenger`, `noofsuitecases`, 
    // `handluggage`, `noofmiles`, `startrate`, `fImage`, `tColor`, `bgColor`, `created_at`, `updated_at`) VALUES ()
    public $veh_image;
    public $vehicle_type; public $noofpassenger; public $noofsuitecases; public $handluggage; public $noofmiles; public $startrate;
    public $fImage; public $tColor; public $bgColor;

    protected $listeners = ['fileUploaded'=>'fileChoosen','clearVehFile'];
    public function fileChoosen($imageData)
    {
        $this->veh_image = $imageData;
        
    }
    public function clearVehFile()
    {
        $this->veh_image="";
    }

    public function addVehicle()
    {
        $this->saveCarImage();
        
        $this->validate([
            'vehicle_type'=>'required',
            'noofpassenger'=>'required',
            'noofsuitecases'=>'required',
            'handluggage'=>'required',
            'noofmiles'=>'required',
            'startrate'=>'required',
            'fImage'=>'required',
            'tColor'=>'required',
            'bgColor'=>'required',
        ]);
        
        
        $saved =Vehicle::create(['vehicle_type' => $this->vehicle_type,'noofpassenger' => $this->noofpassenger,'noofsuitecases' => $this->noofsuitecases,
        'handluggage' => $this->handluggage,'noofmiles' => $this->noofmiles,'startrate' => $this->startrate,
        'fImage' => $this->fImage, 'tColor' => $this->tColor, 'bgColor' => $this->bgColor,]);
        
        if ($saved->exists) {
            session()->flash('message', 'Vehicle Type added successfully!');
        }else{
            session()->flash('error','Vehicle not added please try again later');
        }
    }

    public function saveCarImage()
    {
         if (!$this->veh_image) {
            return null;
        }

        $img = ImageManagerStatic::make($this->veh_image)->encode('jpg');
        $this-> fImage = Str::random().'.jpg';
        Storage::disk('public')->put($this->fImage, $img);
    }
    public function render()
    {
        return view('livewire.add-vehicle');
    }
}
