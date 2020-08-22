<div class="min-h-full min-w-full z-100 bg-blue-500 bg-opacity-50 absolute inset-0 pt-20 shadow-lg modelComponents" id="faremodal">
    <div class="flex flex-col bg-blue-200 border-blue-600 shadow rounded lg:w-1/2 m-auto p-1">
        <div class="flex flex-row bg-blue-600 px-2 rounded-t">
            <div class="sm:w-11/12 py-2">
                <h3 class="mx-auto text-blue-100 ">Fare</h3>
            </div>
            <div class="sm:w-1/12 mt-2">
                <a class="bg-blue-100 rounded-sm text-blue-600 px-3 py-2 closeModal cursor-pointer">Exit</a>
            </div>
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
            <form method='POST' wire:submit.prevent='addFare'>
                <div class="flex justify-between mt-2 mb-2">
                    <div class="flex justify-between">
                        <div>
                            <label for="" class="text-sm mr-1">Vehicle Type</label>
                        </div>
                        <div>
                            <select name="veh_id"  class="h-5 text-sm px-2" wire:model='veh_id'>
                                <option value="" >Choose one</option>
                                @foreach ($vehicles as $veh)                                
                                <option value="{{ $veh->id }}">{{ $veh->vehicle_type }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <input type="checkbox" name="amount_wise"  class="text-blue-400 mr-1" wire:model='company_wise'>
                        <label for="" class="text-sm mr-1">Company Wise</label>
                        <select name=""  class="h-5 text-sm">
                            <option value="">Select</option>
                        </select>
                    </div>
                </div>
                <div class="flex mt-2">
                    <button class="px-2 py-1 text-xs border border-t border-r border-l border-blue-400 bg-blue-400 text-white">
                        Fare List
                    </button>
                    <button class="px-2 py-1 text-xs border border-t border-r border-l border-blue-400">
                        Milea
                    </button>
                </div>
                <div class="flex flex-col border border-sm border-blue-400">
                    <div class="flex">
                        <div class="w-1/2">
                            <div class="flex flex-col p-2">
                                <div class="flex mt-1">
                                    <label for="" class="text-sm w-2/5">From Type</label>
                                    <select class="h-5 text-xs w-2/5" wire:model='fType' wire:change="$emit('newFLocation')">
                                        <option>choose one</option>
                                        @foreach ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select> 
                                    <div class="w-1/5 px-1">
                                        <span class="text-white bg-blue-400 px-1 hover:bg-blue-100 hover:text-blue-500 text-md cursor-pointer ">+</span>
                                    </div>
                                </div>
                                <div class="flex mt-1">
                                    <label for="" class="text-sm w-2/5">From Location</label>
                                    <select class="h-5 text-xs w-2/5" wire:model='cLoc'>
                                        <option>Choose one</option>
                                        @foreach ($Flocations as $location)                                        
                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="w-1/5 px-1">
                                        <span class="text-white bg-blue-400 px-1 hover:bg-blue-100 hover:text-blue-500 text-md cursor-pointer" wire:click="addFfare()">+</span>
                                    </div>
                                </div>
                                <div class="flex mt-2">
                                    <div class="w-1/5 flex flex-col">
                                        <button class="py-1 px-2 border border-blue-400 hover:text-white text-sm cursor-pointer hover:bg-blue-400 w-1/2 m-auto">></button>
                                        <button class="py-1 px-2 border border-blue-400 hover:text-white text-sm cursor-pointer hover:bg-blue-400 w-1/2 m-auto mt-1"><</button>
                                    </div>
                                    <div class="w-3/5">
                                        {{ $value }}
                                        <div class="text-sm w-4/5 p-1 bg-white flex flex-col">
                                            <ul class="none">
                                                @if (count($Ffare)>0)    
                                                    @foreach ($Ffare as $fare) 
                                                        <li class="text-xs flex">
                                                            <input type="checkbox" name="" class="cursor-pointer mr-1" value="{{ $fare['id'] }}">
                                                            <label for="" class="text-xs  cursor-pointer hover:bg-blue">
                                                                {{ $fare['name'] }}
                                                            </label>
                                                        </li>
                                                    @endforeach  
                                                @endif
                                            </ul>                                    
                                        </div>
                                    </div>
                                    <div class="w-1/5">
                                        <button class="py-1 px-2 border border-red-400 hover:text-white text-sm cursor-pointer hover:bg-red-500 text-red my-auto" wire:click.prevent='delAllFfare()'>x</button>
                                    </div>
                                </div>
                            </div>
                        </div>                                                              
                        <div class="w-1/2">
                            <div class="flex flex-col p-2">
                                <div class="flex mt-1">
                                    <label for="" class="text-sm w-2/5">To Type</label>
                                    <select class="h-5 text-xs w-2/5" wire:model='cType' wire:change="$emit('newTLocation')">
                                        <option>choose one</option>
                                        @foreach ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="w-1/5 px-1">
                                        <span class="text-white bg-blue-400 px-1 hover:bg-blue-100 hover:text-blue-500 text-md cursor-pointer ">+</span>
                                    </div>
                                </div>
                                <div class="flex mt-1">
                                    <label for="" class="text-sm w-2/5">To Location</label>
                                    <select class="h-5 text-xs w-2/5" wire:model='cLoc'>
                                        <option>Choose one</option>
                                        @foreach ($Tlocations as $location)
                                        <option value="{{ $location->id }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="w-1/5 px-1">
                                        <span class="text-white bg-blue-400 px-1 hover:bg-blue-100 hover:text-blue-500 text-md cursor-pointer"
                                            wire:click="addTfare()" >+</span>
                                    </div>
                                </div>
                                <div class="flex mt-2">
                                    <div class="w-1/5 flex flex-col">
                                        <button
                                            class="py-1 px-2 border border-blue-400 hover:text-white text-sm cursor-pointer hover:bg-blue-400 w-1/2 m-auto">></button>
                                        <button
                                            class="py-1 px-2 border border-blue-400 hover:text-white text-sm cursor-pointer hover:bg-blue-400 w-1/2 m-auto mt-1"><
                                            </button> 
                                    </div>
                                    <div class="w-3/5">
                                        {{ $value }}
                                        <div class="text-sm w-4/5 p-1 bg-white flex flex-col">
                                            <ul class="none">
                                                @if (count($Tfare)>0)
                                                @foreach ($Tfare as $fare)
                                                <li class="text-xs flex">
                                                    <input type="checkbox" name="" class="cursor-pointer mr-1" value="{{ $fare['id'] }}">
                                                    <label for="" class="text-xs  cursor-pointer hover:bg-blue">
                                                        {{ $fare['name'] }}
                                                    </label>
                                                </li>
                                                @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="w-1/5">
                                        <button
                                            class="py-1 px-2 border border-red-400 hover:text-white text-sm cursor-pointer hover:bg-red-500 text-red my-auto"
                                            wire:click.prevent='delAllTfare()'>x</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-2/3 flex p-2">
                            <label for="" class="text-sm mr-2">Fares </label>
                            <input type="number" name="" class="text-xs h-5 px-1" wire:model='fare'>
                        </div>
                        <div class="w-1/3 flex">
                            <div class="w-1/2 p-2">
                                <button type="submit" class="border border-blue-400 w-full hover:bg-blue-400 hover:text-white px-2 py-1 text-sm">
                                    <i class="fa fa-plus font-bold mr-1"></i>Add
                                </button>
                            </div>
                            <div class="w-1/2 p-2">
                                <button type="submit" class="border border-blue-400 w-full hover:bg-blue-400 hover:text-white px-2 py-1 text-sm">
                                    <i class="fa fa-book font-bold mr-1"></i>New
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                <div class="flex mt-2 shadow-sm">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-blue-400">
                                <td class="text-xs text-white border border-r-blue-700">Car</td>
                                <td class="text-xs text-white border border-r-blue-700">From Location</td>
                                <td class="text-xs text-white border border-r-blue-700">To Location</td>
                                <td class="text-xs text-white border border-r-blue-700">Fare(#)</td>
                                <td class="text-xs text-white border border-r-blue-700"></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fares as $fare)                                
                                <tr>
                                    <td class="text-xs">{{ $fare->vehicle->vehicle_type }}</td>
                                    <td class="text-xs">{{ $fare->Flocation->name }}</td>
                                    <td class="text-xs">{{ $fare->Tlocation->name }}</td>
                                    <td class="text-xs">{{ $fare->fare }}</td>
                                    <td class="">
                                        <button class="bg-white text-xs text-red-400 hover:bg-red-400 hover:text-white rounded border border-red-400 px-1" wire:click='deleteFare({{ $fare->id}})'>Delete <i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="flex mt-2 justify-end">
                    <button class="text-sm py-2 px-2 bg-white border border-blue-400 mr-1 hover:bg-blue-400 hover:text-white">Save & Close</button>
                    <button class="text-sm py-2 px-2 bg-white border border-blue-400 hover:bg-blue-400 hover:text-white">Save & New</button>
                </div>
        </div>
    </div>

</div>