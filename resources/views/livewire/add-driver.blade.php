<div class="min-h-full min-w-full z-100 bg-blue-500 bg-opacity-50 absolute inset-0 pt-20 shadow-lg modelComponents " id="driverModel">
    <div class="flex flex-col bg-blue-200 border-blue-600 shadow rounded lg:w-2/3 md:w-2/3 sm:w-full m-auto p-1">
        <div class="flex flex-row bg-blue-600 px-2 rounded-t">
            <div class="sm:w-11/12 py-2">
                <h3 class="mx-auto text-blue-100 ">Driver</h3>
            </div>
            <div class="sm:w-1/12 mt-2">
                <a class="bg-blue-100 rounded-sm text-blue-600 px-3 py-2 closeModal cursor-pointer">Exit</a>
            </div>
        </div>
        @if (session()->has('message'))
            <div class="p-3 bg-green-300 text-green-800 rounded shadow flex">
                <div class="text-green-800 w-11/12">
                    {{ session('message') }}
                </div>
                <div class="closeS text-green-800 w-1/12 cursor-pointer" onclick="this.parentNode.style.display='none'">X</div>
            </div>
        @endif
        <div class="flex min-w-full mt-4 sm:mt-1">
            <a class="bg-blue-400 mr-1 border border-blue-400 border-b-0 text-gray-900 text-sm p-2 cursor-pointer -mb-3" onclick="driverPanels('addDriver', event)">Add drivers</a>
            <a class="bg-blue-400 mr-1 border border-blue-400 border-b-0 text-gray-900 text-sm p-2 cursor-pointer -mb-3" onclick="driverPanels('allDrivers', event)">Driver Info</a>
            <a class="bg-blue-400 mr-1 border border-blue-400 border-b-0 text-gray-900 text-sm p-2 cursor-pointer -mb-3">Driver Shifts</a>
            <a class="bg-blue-400 mr-1 border border-blue-400 border-b-0 text-gray-900 text-sm p-2 cursor-pointer -mb-3" onclick="driverPanels('vhHistory', event)">Vehicle History</a>
        </div>
        <div class="bg-blue-100 p-2 driver-panels" id="addDriver">
            <form action="" wire:submit.prevent="addDriver()">
                <div class="flex flex-col">  
                    <div class="flex shadow-sm">
                        <div class="lg:w-3/4 sm:w-4/4 min-h-4 px-2">
                            <header class="bg-blue-500 text-sm text-gray-900 px-2 py-1">Login details</header>
                            <div class="flex p-1 shadow-md">
                                <div class="w-1/2">
                                    <div class="flex mb-1">
                                        <label for="" class="text-xs text-gray-900 inline-block">Driver No</label>
                                        <input type="text" class="h-5 px-1 inline-block ml-auto" name="driver_no" wire:model='driver_no'>
                                    </div>
                                    <div class="flex mb-1">
                                        <label for="driver_pass" class="text-xs text-gray-900 inline-block">PDA Password</label>
                                        <input type="search" class="h-5 px-1 inline-block ml-auto" name="pda_pass" wire:model='pda_pass' autocomplete="false" id="driver_pass">
                                    </div>
                                    <div class="flex mb-1">
                                        <label for="" class="text-xs text-gray-900 inline-block" >PDA Mobile No</label>
                                        <input type="text" class="h-5 px-1 inline-block ml-auto" name="pda_mobile" wire:model.debounce1000ms='pda_mobile'>
                                    </div>
                                </div>
                                <div class="w-1/2 pl-4">
                                    <div>
                                        <input type="checkbox" name="has_pda" class="text-indigo-500"  name="" wire:model='has_pda'>
                                        <label class="text-xs">Has PDA</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="rent" class="text-indigo-500"  wire:model='rent'>
                                        <label class="text-xs">Rent Paid</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="active" class="text-indigo-500"  wire:model='active'>
                                        <label class="text-xs">Active</label>
                                    </div>
                                </div>
                            </div>                        
                            <div class="flex shadow-md">
                                <div class="w-2/5 p-2">
                                    <div class="flex mb-2">                                        
                                        <label for="" class="text-gray-900 text-xs w-2/5">Driver name</label>
                                        <input type="text" class="text-gray text-xs h7 w-3/5 px-1" name="driver_name" wire:model='driver_name'>
                                    </div>
                                    <div class="flex mb-2">                                        
                                        <label for="" class="text-gray-900 text-xs w-2/5">Driver Last Name</label>
                                        <input type="text" class="text-gray text-xs h7 w-3/5 px-1" name="driver_lName" wire:model='driver_lName'>
                                    </div>
                                    <div class="flex mb-2">                                        
                                        <label for="" class="text-gray-900 text-xs w-2/5">Email</label>
                                        <input type="search" class="text-gray text-xs h7 w-3/5 px-1" name="email" wire:model='email' autocomplete="false">
                                    </div>
                                    <div class="flex mb-2">                                        
                                        <label for="" class="text-gray-900 text-xs w-2/5">Tel No</label>
                                        <input type="text" class="text-gray text-xs h7 w-3/5 px-1" name="tel_no" wire:model='tel_no'>
                                    </div>
                                    <div class="flex mb-2">                                        
                                        <label for="" class="text-gray-900 text-xs w-2/5">Addrress</label>
                                        <input type="text" class="text-gray text-xs h7 w-3/5 px-1" name="address" wire:model='address'>
                                    </div>
                                </div>
                                <div class="w-3/5 p-2">
                                    <div class="flex mb-2">
                                        <label for="" class="text-gray-900 text-xs w-3/5">Date of Birth</label>
                                        <input type="text" class="text-gray text-xs h7 w-2/5 px-1 timerPicker" name="date_of_birth " wire:model='date_of_birth'>
                                    </div>
                                    <div class="flex mb-2">
                                        <label for="" class="text-gray-900 text-xs w-3/5">Mobile No</label>
                                        <input type="text" class="text-gray text-xs h7 w-2/ px-1" name="mobile_no" wire:model='mobile_no'>
                                    </div>
                                    <div class="flex mb-2">
                                        <label for="" class="text-gray-900 text-xs w-3/5">NI</label>
                                        <input type="text" class="text-gray text-xs h7 w-2/5 px-1" name="Ni" wire:model='Ni'>
                                    </div>
                                    <div class="flex mb-2">
                                        <label for="" class="text-gray-900 text-xs w-3/5">Driver Type</label>
                                        <select name="driver_type" class="text-gray text-xs h7 w-2/5" wire:model='driver_type'>
                                            <option value="operator">operator</option>
                                            <option value="cab">cab</option>
                                        </select>
                                    </div>
                                    <div class="flex mb-2">
                                        <label for="" class="text-gray-900 text-xs w-3/5">Driver Monthly rent</label>
                                        <input type="number" class="text-gray text-xs h7 2-3/5" name="monthly_rent" wire:model='monthly_rent'>
                                    </div>
                                </div>
                            </div>                            
                        </div>                        
                        <div class="lg:w-1/4 sm:w-4/4 min-h-4 flex flex-col justify-between shadow-md">
                            <header class=" shadow p-1 text-sm text-gray-900">Photo</header>
                            <main class="">
                                <img src="{{ $image }}" alt="" class="m-auto" height="80%">
                            </main>
                            <footer class=" shadow p-2 text-sm text-gray flex justify-between">
                                <input type="file" class="border border-blue p-1 text-gray-900 text-xs w-1/3" id="profile" name="profile_image" wire:change="$emit('fileChoosen')">
                                {{-- <a href="" class="border border-blue p-1 text-gray-900 text-xs ">Preview</a> --}}
                                <a class="border border-blue p-1 text-gray-900 text-xs cursor-pointer" wire:click="$emit('clearFile')">Clear</a>
                            </footer>
                        </div> 
                    </div>                  
                    <div class="flex shadow-sm mt-2">
                        <div class="lg:w-2/4 shadow sm:w-4/4 min-h-4 px-2">
                            <div class="">
                                <header class="bg-green-400 text-gray-900 text-sm py-1 px-2">Exipiry date</header>
                            </div>                     
                            <table class="min-w-full mt-2 ">
                                <thead class="bg-blue-100 text-gray-900">
                                    <tr class="border border-blue-300">
                                        <td class="text-xs text-gray-900 border border-r border-blue-400">Expiry Date</td>
                                        <td class="text-xs text-gray-900 border border-r border-blue-400">Document Title</td>
                                        <td class="text-xs text-gray-900 border border-r border-blue-400">File N...</td>
                                        <td class="text-xs text-gray-900 border border-r border-blue-400"></td>
                                        <td class="text-xs text-gray-900 border border-r border-blue-400"></td>
                                        <td class="text-xs text-gray-900"></td>
                                    </tr>
                                </thead>
                                <tbody class="bg-whiten border border-blue-400">
                                    <tr class="bg-white hover:bg-blue-200 cursor-pointer border border-b-400">
                                        <td class="text-xs text-gray-900 p-1 border border-r border-blue-400"></td>
                                        <td class="text-xs text-gray-900 p-1 border border-r border-blue-400">PHC Vehicle</td>
                                        <td class="text-xs text-gray-900 p-1 border border-r border-blue-400"></td>
                                        <td class="text-xs text-gray-900 p-1 border border-r border-blue-400">
                                            <a href="" class="bg-blue-100 hover:bg-blue-300 hover:text-white text-gray-900 text-xs rounded border border-blue-400 p-1">Clear</a>
                                        </td>
                                        <td class="text-xs text-gray-900 p-1 border border-r border-blue-400">
                                            <a href="" class="bg-blue-100 hover:bg-blue-300 hover:text-white text-gray-900 text-xs rounded border border-blue-400 p-1">Browse</a>
                                        </td>
                                        <td class="text-xs text-gray-900 p-1 border border-r border-blue-400">
                                            <a href="" class="bg-blue-100 hover:bg-blue-300 hover:text-white text-gray-900 text-xs rounded border border-blue-400 p-1">View</a>
                                        </td>
                                    </tr>                                    
                                    <tr class="bg-white hover:bg-blue-200 cursor-pointer">
                                        <td class="text-xs text-gray-900 p-1 border border-r border-blue-400"></td>
                                        <td class="text-xs text-gray-900 p-1 border border-r border-blue-400">PHC Driver</td>
                                        <td class="text-xs text-gray-900 p-1 border border-r border-blue-400"></td>
                                        <td class="text-xs text-gray-900 p-1 border border-r border-blue-400">
                                            <a href="" class="bg-blue-100 hover:bg-blue-300 hover:text-white text-gray-900 text-xs rounded border border-blue-400 p-1">Clear</a>
                                        </td>
                                        <td class="text-xs text-gray-900 p-1 border border-r border-blue-400">
                                            <a href="" class="bg-blue-100 hover:bg-blue-300 hover:text-white text-gray-900 text-xs rounded border border-blue-400 p-1">Browse</a>
                                        </td>
                                        <td class="text-xs text-gray-900 p-1 border border-r border-blue-400">
                                            <a href="" class="bg-blue-100 hover:bg-blue-300 hover:text-white text-gray-900 text-xs rounded border border-blue-400 p-1">View</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                        <div class="lg:w-2/4 sm:w-4/4 min-h-4 px-2">
                            <div class="shadow">
                                <header class="bg-indigo-400 text-gray text-sm py-1 px-2">
                                    Availability
                                </header>
                                    <div class="flex">
                                        <div class="sm:w-1/2">
                                            <div class="flex flex-col p-2">
                                                <div class="flex">
                                                    <label for="" class="text-xs text-gray-900 w-1/2">Became Available</label>
                                                    <input name="available_on"  class="w-full w-1/2 h-4 timerPicker" wire:model='available_on'>
                                                </div>
                                                <div class="flex ">
                                                    <label for="" class="text-xs text-gray-900 w-1/2">Ending Date</label>
                                                    <input name="av_end_at"  class="w-full w-1/2 h-4 timerPicker" wire:model='end_at'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sm:w-1/2">
                                            <div class="flex flex-col p-2">
                                                <div>
                                                    <input type="checkbox" name="end_driver"  class="text-indigo inline-block" wire:model='end_driver'>
                                                    <span class="inline-block text-gray-900">End Driver</span>
                                                </div>
                                                <div class="flex">
                                                    <a href="" class="mr-1 text-gray-900 border border-blue-400 bg-white hover:bg-blue-400 text-white px-2 mr-1"><i class="fa fa-plus"></i> Add</a>
                                                    <a href="" class="mr-1 text-gray-900 border border-blue-400 bg-white hover:bg-blue-400 text-white px-2"> New</a>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                    </div>
                                <div class="flex">
                                    <table class="min-w-full">
                                        <thead class="bg-indigo-300">
                                            <tr>
                                                <td class="text-white text-sm border border-l px-1">Became available</td>
                                                <td class="text-white text-sm px-1">Ending date</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="border border-l"></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 
                    </div>  
                    <div class="flex mt-2">
                        <div class="w-3/5">
                            <header class="px-2 py-1 bg-red-300 text-gray-900 text-sm">Assigned Vehicle</header>
                            <div class="flex">
                                <div class="w-1/2 px-1 p-2 flex flex-col">
                                    <div class="flex">
                                        <label for="" class="text-xs text-gray-900 w-2/5">Assigned On</label>
                                        <input class="w-3/5 h-5 text-xs timerPicker" name="assigned_on timerPicker" id="assigned_on" wire:model='assigned_on'>
                                    </div>
                                    <div class="flex">
                                        <label for="" class="text-xs text-gray-900 w-2/5">Vehicle Type</label>
                                        <select class="w-3/5 h-5 mt-1 text-xs" name="vehicle_type" wire:model='vehicle_type'>
                                            @foreach ($types as $type)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex">
                                        <label for="" class="text-xs text-gray-900 w-2/5">Color</label>
                                        <select class="w-3/5 h-5 mt-1 text-xs" name="vehicle_color" wire:model='vehicle_color'>
                                            <option value="">select</option>
                                            <option value="">select</option>
                                        </select>
                                    </div>
                                    <div class="flex">
                                        <label for="" class="text-xs text-gray-900 w-2/5">Vehicle Make</label>
                                        <input type="text" class="w-3/5 h-5 px-1 text-xs mt-1" name="vehicle_make" wire:model='vehicle_make'>
                                    </div>
                                </div>
                                <div class="w-1/2 px-1 p-2 flex flex-col">
                                    <div class="flex">
                                        <div class="w-3/5 flex">
                                            <label for="" class="text-xs text-gray-900 mr-1">End on </label>
                                            <input name="end_on"  class="h-5 text-xs timerPicker" id="end_on" wire:model='end_on'>
                                        </div>
                                        <div class="w-2/5">
                                            <a href="" class="text-xs text-gray-900 border border-blue-400 p-1" id="end_veh">End Vehicle</a>
                                        </div>
                                    </div>
                                    <div class="flex mt-1">
                                        <label for="" class="w-2/5 text-xs text-gray-900">Vehicle No</label>
                                        <input type="text" class="w-3/5 h-5 text-xs p-1" name="vehicle_no" wire:model='vehicle_no'>
                                    </div>
                                    <div class="flex mt-1">
                                        <label for="" class="w-2/5 text-xs text-gray-900">Owner</label>
                                        <input type="text" class="w-3/5 h-5 text-xs p-1" name="owner" wire:model='owner'>
                                    </div>
                                    <div class="flex mt-1">
                                        <label for="" class="w-2/5 text-xs text-gray-900">Vehicle Model</label>
                                        <input type="text" class="w-3/5 h-5 text-xs p-1" name="vehicle_model" wire:model='vehicle_model'>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-2/5 pl-2 pt-20">
                            <button type="submit"
                                class=" bg-white border border-blue-400 mr-2 ml-auto p-2 rounded-sm text-gray-900 hover:bg-blue-400 hover:text-white cursor-pointer">
                                Print
                            </button>
                            <button type="submit"
                                class=" bg-white border border-blue-400 mr-2 ml-auto p-2 rounded-sm text-gray-900 hover:bg-blue-400 hover:text-white cursor-pointer" wire:click='addDriver'>
                                Save & New
                            </button>
                            {{-- <button type="submit"
                                class=" bg-white border border-blue-400 p-2  rounded-sm text-gray-900 hover:bg-blue-400 hover:text-white cursor-pointer closeModal" wire:click='addDriver'>
                                Save & Exit
                            </button> --}}
                        </div>
                    </div>      
                </div>
            </form>
        </div>
        <div class="bg-blue-100 p-2 driver-panels hidden" id='allDrivers'>
            <table class="mt-2 w-full">
                <thead>
                    <tr class="bg-blue-400">
                       <td></td>
                       <td class="text-xs text-white border border-r-blue-700">Driver type</td>
                       <td class="text-xs text-white border border-r-blue-700">Driver name</td>
                       <td class="text-xs text-white border border-r-blue-700">has pda</td>
                       <td class="text-xs text-white border border-r-blue-700">rent paid</td>
                       <td class="text-xs text-white border border-r-blue-700">Active</td>
                       <td class="text-xs text-white border border-r-blue-700">Email</td>
                       <td class="text-xs text-white border border-r-blue-700">Tel no</td>
                       <td class="text-xs text-white border border-r-blue-700">Veh type</td>
                       <td class="text-xs text-white border border-r-blue-700">Ass on</td>
                       <td class="text-xs text-white border border-r-blue-700">End on</td>
                       <td class="text-xs text-white border border-r-blue-700"></td>
                    </tr>
                </thead>
                <tbody >
                    @foreach($drivers as $driver)
                    <tr class="mt-2">
                        <td class="text-xs "></td>
                        <td class="text-xs ">{{ $driver->firstName }} {{ $driver->lastName}}</td>
                        <td class="text-xs ">{{ $driver->has_pda }}</td>
                        <td class="text-xs ">{{ $driver->rent  }}</td>
                        <td class="text-xs ">{{ $driver->active  }}</td>
                        <td class="text-xs ">{{ $driver->email  }}</td>
                        <td class="text-xs ">{{ $driver->tel_no  }}</td>
                        <td class="text-xs ">{{ $driver->vehicle_type }}</td>
                        <td class="text-xs ">{{ $driver->assigned_on  }}</td>
                        <td class="text-xs ">{{ $driver->end_on  }}</td>
                        <td class="text-xs "></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>           
        </div>
        <div class="bg-blue-100 p-2 driver-panels hidden" id='vhHistory'>
            <p>Vehicle history</p>
        </div>
    </div>
</div>