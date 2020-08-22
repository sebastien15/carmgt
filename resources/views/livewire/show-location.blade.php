<div class="min-h-full min-w-full z-100 bg-blue-500 bg-opacity-50 fixed inset-0 pt-20 shadow-lg modelComponents" id="loc-model">
    <div class="flex flex-col bg-blue-200 border-blue-600 shadow rounded lg:w-1/2 sm:w-3/5 m-auto  p-1">
        <div class="flex flex-row bg-blue-600 px-2 rounded-t">
            <div class="sm:w-11/12 py-2">
                <h3 class="mx-auto text-blue-100 ">Location</h3>
            </div>
            <div class="sm:w-1/12 mt-2">
                <a class="bg-blue-100 rounded-sm text-blue-600 px-3 py-2 closeModal cursor-pointer">Exit</a>
            </div>
        </div>
        @if (session()->has('success'))
            <div class="p-3 bg-green-300 text-green-800 rounded shadow flex success">
                <div class="text-green-800 w-11/12">
                    {{ session('success') }}
                </div>
                <div class="closeS text-green-800 w-1/12 cursor-pointer" onclick="this.parentNode.style.display='none'">X</div>
            </div>
        @endif
        @if(session()->has('error'))
            <div class="p-3 bg-red-300 text-red-800 rounded shadow flex">
                <div class="text-red-800 w-11/12">
                    {{ session('error') }}
                </div>
                <div class="closeS text-red-800 w-1/12 cursor-pointer" onclick="this.parentNode.style.display='none'">X</div>
            </div>            
        @endif
        <div class="bg-blue-100 mt-4 p-2">
            @if ($errors->any())
                <div class="bg-red-400 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li class="text-xs text-white ">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="" wire:submit.prevent="addLocation()">
                <div class="flex flex-col">
                    <div class="flex flex-row">
                        <div class="sm:w-1/2 p-2">
                            <label class="text-sm text-blue-900">Location Name:</label>
                            <input type="text" class="min-w-full p-1 text-gray-800" name="name" wire:model.debounce500ms='name'>
                        </div>
                        <div class="sm:w-1/2 p-2">
                            <label class="text-sm text-blue-900">Location Type:</label>
                            {{ $type_id }}
                            <select class="min-w-full p-1 text-gray-800" name="type_id"  wire:model='type_id'>
                                <option value="">choose</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach                                
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-row ">
                        <div class="sm:w-1/2 p-2">
                            <label class="text-sm text-blue-900">Address:</label>
                            <input type="text" class="min-w-full p-1 text-gray-800" name="address"  wire:model='address'>
                        </div>
                        <div class="sm:w-1/2 p-2 flex">
                            <div class="sm:w-1/2 px-1">
                                <label class="text-xs text-blue-900">Post Code:</label>
                                <input type="text" class="max-w-full text-gray-800 mr-1 px-2" name="code"  wire:model='code'>
                            </div>
                            <div class="sm:w-1/2 px-1">
                                <label class="text-xs text-blue-900">Extra Charges:</label>
                                <input type="number" class="max-w-full text-gray-800" name="charge"  wire:model='charge'>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row">
                        <div class="sm:w-1/2 p-2">
                            <label class="text-sm text-blue-900">Zone:</label>
                            {{ $zone_id }}
                            <select class="min-w-full p-1 text-gray-800" name="zone_id"  wire:model='zone_id'>
                                <option value="">choose</option>
                            @foreach ($zones as $zone)
                                <option value="{{ $zone->id }}">{{ $zone->name }}</option>
                            @endforeach
                            </select>                  
                        </div>
                        <div class="sm:w-1/2 p-2 pt-4">
                            <button type="submit" class="bg-transparent border border-blue-400 text-sm px-1 py-2 hover:bg-blue-400 hover:text-white">Save & New</button>
                            <button class="bg-transparent border border-blue-400 text-sm px-1 py-2 hover:bg-blue-400 hover:text-white" wire:click="$emit('saveLocation')">Save & Close</button>
                        </div>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
    
</div>
