<div class="min-h-full min-w-full z-100 bg-blue-500 bg-opacity-50 absolute inset-0 pt-20 shadow-lg " id="bookModal">
    <div class="flex flex-col bg-blue-200 border-blue-600 shadow rounded lg:w-3/4 m-auto p-1 mb-10">
        <div class="flex flex-row bg-blue-600 px-2 rounded-t">
            <div class="sm:w-11/12 py-2">
                <h3 class="mx-auto text-blue-100 ">Booking</h3>
            </div>
            <div class="sm:w-1/12 mt-2">
                <a class="bg-blue-100 rounded-sm text-blue-600 px-3 py-2 closeModal cursor-pointer">Exit</a>
            </div>
        </div>
        <div class="flex bg-blue-400 px-2 py-1">
            <a href="" class="bg-white py-1 px-2 rounded text-sm text-gray-900 hover:bg-blue-500 hover:text-white mr-1">Base</a>
            <a href="" class="bg-white py-1 px-2 rounded text-sm text-gray-900 hover:bg-blue-500 hover:text-white mr-1">Airports</a>
            <a href="" class="bg-white py-1 px-2 rounded text-sm text-gray-900 hover:bg-blue-500 hover:text-white mr-1">Stations</a>
            <a href="" class="bg-white py-1 px-2 rounded text-sm text-gray-900 hover:bg-blue-500 hover:text-white mr-1">Hospital</a>
            <a href="" class="bg-white py-1 px-2 rounded text-sm text-gray-900 hover:bg-blue-500 hover:text-white mr-1">Route Suggestion</a>
            <a href="" class="bg-white py-1 px-2 rounded text-sm text-gray-900 hover:bg-blue-500 hover:text-white mr-1">Job History</a>
            <a href="" class="bg-white py-1 px-2 rounded text-sm text-gray-900 hover:bg-blue-500 hover:text-white mr-1">Multi Booking</a>
            <a href="" class="bg-white py-1 px-2 rounded text-sm text-gray-900 hover:bg-blue-500 hover:text-white">Send Email</a>
        </div>
        @if (session()->has('error'))
        <div class="p-3 bg-red-300 text-red-800 rounded shadow flex">
            <div class="text-red-800 w-11/12">
                {{ session('error') }}
            </div>
            <div class="closeS text-green-800 w-1/12 cursor-pointer" onclick="this.parentNode.style.display='none'">X</div>
        </div>
        @endif
        @if (session()->has('message'))
        <div class="p-3 bg-green-300 text-green-800 rounded shadow flex">
            <div class="text-green-800 w-11/12">
                {{ session('message') }}
            </div>
            <div class="closeS text-green-800 w-1/12 cursor-pointer" onclick="this.parentNode.style.display='none'">X</div>
        </div>
        @endif
        @if ($errors->any())
        <div class="bg-red-400 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="text-xs text-white ">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="bg-blue-100 mt-4 p-2">
            <form wire:submit.prevent='addBooking'>
            <div class="flex p-1 shadow-sm">
                <div class="sm:w-2/5 flex flex-col">
                    <div class="flex">
                        <label for="" class="w-1/3 text-sm text-gray-900">From</label>
                        <div class="w-2/3">
                            <input type="text" class="h-7 px-1 text-sm bg-white" wire:model='from'>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="" class="w-1/3 text-sm text-gray-900">Pickup Notes</label>
                        <div class="w-2/3">
                            <input type="text" class="h-7 px-1 text-sm bg-white" wire:model='p_notes'>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="" class="w-1/3 text-sm text-gray-900">Pickup Point</label>
                        <div class="w-2/3">
                            <input type="text" class="h-7 px-1 text-sm bg-white" wire:model='p_point'>
                        </div>
                    </div>
                </div>
                <div class="sm:w-2/5 flex flex-col">
                    <div class="flex">
                        <label for="" class="w-1/3 text-sm text-gray-900">To</label>
                        <div class="w-2/3">
                            <input type="text" class="h-7 px-1 text-sm" wire:model='to'>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="" class="w-1/3 text-sm text-gray-900">Dest. Notes</label>
                        <div class="w-2/3">
                           <input type="text" class="h-7 px-1 text-sm" wire:model='d_notes'>
                        </div>
                    </div>
                    <div class="flex">
                        <label for="" class="w-1/3 text-sm text-gray-900">Destination</label>
                        <div class="w-2/3">
                            <input type="text" class="h-7 px-1 text-sm" wire:model='d_point'>
                        </div>
                    </div>
                </div>
                <div class="sm:w-1/5 flex flex-col justify-end">
                    <div>
                        <input type="checkbox" name=""  class="text-blue-400">
                        <label for="" class="text-xs text-gray-900">Reverse</label>
                    </div>
                    <button class="text-sm text-gray-900 rounded-sm px-1 py-2 border border-blue-400 bg-white hover:bg-blue-400 hover:text-white w-2/3 m-auto">Show via Point </button>     
                </div>                
            </div>
            <div class="flex p-1 mt-2 shadow-sm">
                <div class="w-2/5 flex flex-col px-2">
                    <div class="flex justify-around">
                        <label class="text-sm text-gray-900 ">Vehicle Type</label>
                        <select name=""  class="text-xs text-gray-900 h-5 " wire:model='veh_id'>
                            @foreach ($vehicles as $vehicle)                                
                                <option value="{{ $vehicle->id }}">{{ $vehicle->vehicle_type }}</option>
                            @endforeach
                        </select>
                        <button class="text-xs text-gray-900 rounded border py-1 px-2 border-blue-400 hover:bg-blue-400 hover:text-white">Multi Vehicle</button>
                    </div>
                    <div class="flex  mt-2 justify-around">
                        <label for="" class="text-sm text-gray-900">Journey Type</label>
                        <input type="radio" name="" value="oneway"  class="text-blue-400" wire:model='j_type'>
                        <label for="" class="text-xs">One Way</label>                        
                        <input type="radio" name="" value="return"  class="text-blue-400" wire:model='j_type'>
                        <label for="" class="text-xs">Return</label>
                        <input type="radio" name="" value="w/r"  class="text-blue-400" wire:model='j_type'>
                        <label for="" class="text-xs">W/R</label>
                    </div>
                    <div class="flex mt-2 ">
                        <label for="" class="text-xs text-gray-900 w-1/3">Passengers</label>
                        <input type="number" name=""  class="h-5 text-xs text-gray-900 w-2/3" wire:model='passenger'>
                    </div>
                    <div class="flex mt-2 ">
                        <label for="" class="text-xs text-gray-900 w-1/3">Luggages</label>
                        <input type="number" name=""  class="h-5 text-xs text-gray-900 w-2/3" wire:model='luggages'>
                    </div>
                    <div class="flex mt-2 ">
                        <input type="checkbox" name=""  class="text-blue-400 w-1/3">
                        <label for="" class="text-xs text-gray-900 w-1/3">Account</label>
                        <input type="text" class="text-gray-900 bg-white px-2 text-xs h-5 w-2/3" disabled>
                    </div>
                    <div class="flex mt-2 ">
                        <label for="" class="text-xs text-gray-900 w-1/3">Department</label>
                        <select name=""  class="h-5 text-xs w-full w-2/3">
                            <option value="">Hello</option>
                        </select>
                    </div>
                </div>
                <div class="w-2/5 flex flex-col px-2">
                    <div class="flex justify-between">
                        <label for="" class="text-gray-900 text-sm">customer Name</label>
                        <input type="text" class="h-5 text-xs text-gray-900 px-2" wire:model='c_name'>
                    </div>
                    <div class="flex justify-between mt-1">
                        <label for="" class="text-gray-900 text-sm">Telephone No</label>
                        <input type="text" class="h-5 text-xs text-gray-900 px-2" wire:model='tel_no'>
                    </div>
                    <div class="flex justify-between mt-1">
                        <label for="" class="text-gray-900 text-sm">Mobile No</label>
                        <input type="text" class="h-5 text-xs text-gray-900 px-2" wire:model='mobile_no'>
                    </div>
                    <div class="flex justify-between mt-1">
                        <label for="" class="text-gray-900 text-sm">Email</label>
                        <input type="text" class="h-5 text-xs text-gray-900 px-2" wire:model='email'>
                    </div>
                </div>
                <div class="w-1/5 flex flex-col justify-end">
                    <button class="text-gray-900 text-sm p-2 bg-white hover:bg-blue-400 hover:text-white border border-blue-400 w-2/3 m-auto">Notes</button>
                </div>
            </div>
            <div class="flex p-1 mt-2 shadow-sm">
                <div class="w-1/2 flex flex-col">
                    <div class="flex justify-between ">
                        <div>
                            <label for="" class="text-sm text-gray-900">Pickup Date</label>
                            <input type="text" class='text-xs text-gray-900 px-2 timerPicker' wire:model='p_date'>
                        </div>
                        <div class="">
                            <label for="" class="text-sm text-gray-900 ">Time</label>
                            {{-- <input type="text" class='text-xs text-gray-900 px-2' wire:model='p_hour' data-clocklet> --}}
                            <input type="text" class='text-xs text-gray-900 px-2' wire:model='p_hour'>
                        </div>
                    </div>
                    <div class="flex mt-1">
                        <label for="" class="text-sm text-gray-900 w-1/3">
                            Driver
                        </label>
                        <select name=""  class="h-5 text-xs w-2/3" wire:model='driver_id'>
                            @foreach ($drivers as $driver)
                                <option value="{{ $driver->id }}">{{ $driver->driver_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col mt-1">
                        <div class="flex mt-1">
                            <input type="checkbox" name=""  class="text-blue-400 mr-1 cursor-pointer">
                            <label for="" class="text-sm">Disable Driver Text</label>
                        </div>
                        <div class="flex mt-1">
                            <input type="checkbox" name=""  class="text-blue-400 mr-1 cursor-pointer">
                            <label for="" class="text-sm">Disable Passenger Text</label>
                        </div>
                    </div>
                </div>
                <div class="w-1/2 p-2 flex flex-col">
                    <div>
                        <label for="" class="text-sm">Special Requirement</label>
                        <textarea name=""  cols="30" rows="10" class="rounded-xs text-sm text-gray-900 h-16 p-2" wire:model='special'></textarea>
                    </div>
                    <div class="flex">
                        {{-- <label for="">Action</label> --}}
                        <button type="submit" class="bg-white hover:bg-blue-400 text-sm hover:text-white border border-blue-400 px-2 py-4 mr-1">Save Booking</button>
                        <button class="bg-white hover:bg-blue-400 text-sm hover:text-white border border-blue-400 px-4 py-4 mr-1">Print</button>
                        <button class="bg-white hover:bg-blue-400 text-sm hover:text-white border border-blue-400 px-2 py-4 mr-1" wire:click='cancelBooking'>Cancel Booking</button>
                        <button class="bg-white hover:bg-blue-400 text-sm hover:text-white border border-blue-400 px-4 py-4 closeModal">Exit</button>
                    </div>
                </div>
            </div>       
            </form>     
            <div class="flex flex-col">
                    <header class="bg-blue-500 text-white py-2 px-1 text-sm w-full">
                        Payment & Charges Details
                    </header>
                <div class="flex flex-col p-2 justify-around">
                    <div class="flex shadow-md">
                        <div class="flex mr-1">
                            <label for="" class="text-sm mr-1">Payment Mode</label>
                            <select name=""  class="h-5 text-xs px-1">
                                <option value="">Choose</option>
                            </select>
                        </div>
                        <div class="flex mr-1">
                            <button class="rounded-sm p-1 text-xs"><i class="fa fa-money"></i> Payment</button>
                        </div>
                        <div class="flex mr-1">
                            <input type="checkbox" name=""  class="mr-1">
                            <label for="" class="text-sm">Commission</label>
                            <input type="text" class="h-5 text-xs px-1 w-1/6 mx-1">
                            <select name=""  class="h-5 text-xs px-1">
                                <option value="">percent</option>
                            </select>
                        </div>
                        <div class="flex mr-1">
                            <button class="text-sm bg-blue-400 text-white p-1">Calculate Fares</button>
                        </div>
                        <div class="flex">
                            <label for="" class="text-sm mr-1">Customer Fares </label>
                            <input type="text" class="h-5 text-xs px-1">
                        </div>
                    </div>
                    <div class="flex mt-2">
                        <div class="flex">
                            <div class="w-1/3 p-2">
                                <div class="flex justify-between">
                                    <label for="" class="text-xs text-gray-900">Parking Charges </label>
                                    <input type="text" class="h-5 text-xs px-1">
                                </div>
                                <div class="flex justify-between mt-1">
                                    <label for="" class="text-xs text-gray-900">Extra Drop/charges</label>
                                    <input type="text" class="h-5 text-xs px-1">
                                </div>
                                <div class="flex justify-between mt-1">
                                    <label for="" class="text-xs text-gray-900">Cong. Charges</label>
                                    <input type="text" class="h-5 text-xs px-1">
                                </div>
                            </div>
                            <div class="w-1/3 mt-2 p-2">
                                <div class="flex justify-between">
                                    <label for="" class="text-xs text-gray-900">Waiting Charges</label>
                                    <input type="text" class="h-5 text-xs px-1">
                                </div>
                                <div class="flex justify-between mt-1">
                                    <label for="" class="text-xs text-gray-900">Meet & Greet</label>
                                    <input type="text" class="h-5 text-xs px-1">
                                </div>
                                <div class="flex justify-between mt-1">
                                    <label for="" class="text-xs text-gray-900">Total Charges</label>
                                    <input type="text" class="h-5 text-xs px-1">
                                </div>
                            </div>
                            <div class="w-1/3 mt-2 p-2">
                                <div class="flex justify-between">
                                    <label for="" class="text-xs text-gray-900">Fares </label>
                                    <input type="text" class="h-5 text-xs px-1">
                                </div>
                                <div class="flex justify-between mt-1">
                                    <label for="" class="text-xs text-gray-900 ">Return Fares</label>
                                    <input type="text" class="h-5 text-xs px-1 w-1/11">
                                </div>
                                {{-- <div class="flex justify-between">                                    
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>