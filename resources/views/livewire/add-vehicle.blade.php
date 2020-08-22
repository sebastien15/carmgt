<div class="min-h-full min-w-full z-100 bg-blue-500 bg-opacity-50 fixed inset-0 pt-20 shadow-lg modelComponents" id="vehicleModal">
    <div class="flex flex-col bg-blue-200 border-blue-600 shadow rounded lg:w-3/4 m-auto p-1">
        <div class="flex flex-row bg-blue-600 px-2 rounded-t">
            <div class="sm:w-11/12 py-2">
                <h3 class="mx-auto text-blue-100 ">Vehicle Type</h3>
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
        <div class="bg-blue-100 mt-4 p-2">      
        <form method="post" wire:submit.prevent='addVehicle'>            
            <div class="flex mt-2 shadow-sm">
                <div class="w-4/5 flex flex-col">
                    <div class="flex flex-col">
                        <div class="flex">
                            <label for="" class="text-sm mr-1 w-2/5 ">Vehicle Type</label>
                            <input type="text" class="px-1 text-sm" name="vehicle_type" wire:model.lazy='vehicle_type'>
                        </div>
                        <div class="flex mt-1">
                            <label for="" class="text-sm mr-1 w-2/5">Number of Passengers</label>
                            <input type="number" class="px-1 text-sm" name="noofpassenger" wire:model.lazy='noofpassenger'>
                        </div>
                        <div class="flex mt-1">
                            <label for="" class="text-sm mr-1 w-2/5">Number of luggages</label>
                            <input type="number" class="px-1 text-sm" name="noofsuitecases" wire:model.lazy='noofsuitecases'>
                        </div>
                        <div class="flex mt-1">
                            <label for="" class="text-sm mr-1 w-2/5">Number of Hand luggages</label>
                            <input type="number" class="px-1 text-sm" name="handluggage" wire:model.lazy='handluggage'>
                        </div>
                    </div>
                    <div class="flex flex-col mt-4">
                       <div class="flex">
                            <span class="bg-blue-400 text-white p-1 sm:w-1/5 text-sm mr-2">Peak Off Peak Wise</span>
                            <div class="sm:w-4/5 flex ">
                                <label class="text-xs mr-1">Start Rate</label>
                                <input class="text-xs bg-white h-5 mr-1" placeholder="0.00" name="startrate" wire:model.lazy='startrate'>
                                <label class="text-xs mr-1">No of Miles for Start Rate</label>
                                <input class="text-xs bg-white h-5 w-1/12 mr-1" placeholder="0.00" name="noofmiles" wire:model.lazy='noofmiles'>
                                <label for="" class="text-xs">Miles</label>
                            </div>
                       </div> 
                       <div class="flex flex-col shadow-sm mt-2 border border-sm border-blue-400">
                            <div class="flex">
                                <label class="text-xs mr-1">From</label>
                                <input type="text" class="h-5 w-1/6 mr-1 text-xs">
                                <label class="text-xs mr-1">To </label>
                                <input type="text" class="h-5 w-1/6 mr-1 text-xs">
                                <label class="text-xs mr-1">Start Rate</label>
                                <input type="text" class="h-5 w-1/6 mr-1 text-xs">
                                <label class="text-xs mr-1">No of miles for start Rate</label>
                                <input type="text" class="h-5 w-1/6 mr-1 text-xs">
                                <label class="text-xs">Miles</label>
                            </div>
                            <div class="flex">
                                <label class="text-xs mr-1">From</label>
                                <input type="text" class="h-5 w-1/6 mr-1 text-xs">
                                <label class="text-xs mr-1">To </label>
                                <input type="text" class="h-5 w-1/6 mr-1 text-xs">
                                <label class="text-xs mr-1">Start Rate</label>
                                <input type="text" class="h-5 w-1/6 mr-1 text-xs">
                                <label class="text-xs mr-1">No of miles for start Rate</label>
                                <input type="text" class="h-5 w-1/6 mr-1 text-xs">
                                <label class="text-xs">Miles</label>
                            </div>
                       </div> 
                    </div>
                </div>
                <div class="lg:w-1/5 sm:w-4/4 min-h-4 flex flex-col justify-between shadow-md">
                    <header class=" shadow p-1 text-sm text-gray-900">Photo</header>
                    <main class="">
                        <img src="{{ $veh_image }}" alt="" class="m-auto" height="80%">
                    </main>
                    <footer class=" shadow p-2 text-sm text-gray flex justify-between">
                        <input type="file" class="border border-blue p-1 text-gray-900 text-xs w-1/3" name="fImage" wire:change='$emit("carImage")' id="carImage">
                        <a class="border border-blue p-1 text-gray-900 text-xs cursor-pointer" wire:click="$emit('clearVehFile')">Clear</a>
                    </footer>
                </div>
            </div>
            <div class="flex mt-4 ">
                <div class="w-2/3">
                    <div class="flex">
                        <div class="w-1/2 flex">
                            <label for="" class="text-sm w-2/5">Background color</label>
                            <input type="text" class="h-5 w-2/5" name="bgColor" wire:model.lazy='bgColor'>
                        </div>
                        <div class="w-1/2 flex">
                            <button class="px-2 py-1 text-xs border border-blue-400 bg-white hover:bg-blue-400 hover:text-black mr-1 mt-1">Pick Color</button>
                            <button class="px-2 py-1 text-xs border border-blue-400 bg-white hover:bg-blue-400 hover:text-black mr-1 mt-1">Clear Color</button>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-1/2 flex">
                            <label for="" class="text-sm  w-2/5">Text color</label>
                            <input type="text" class="h-5 w-2/5" name="tColor" wire:model.lazy='tColor'>
                        </div>
                        <div class="w-1/2 flex">
                            <button class="px-2 py-1 text-xs border border-blue-400 bg-white hover:bg-blue-400 hover:text-black mr-1 mt-1">Pick Color</button>
                            <button class="px-2 py-1 text-xs border border-blue-400 bg-white hover:bg-blue-400 hover:text-black mr-1 mt-1">Clear Color</button>
                        </div>
                    </div>
                </div>
                <div class="w-1/3">
                    {{-- <button
                        class="text-sm py-2 px-2 bg-white border border-blue-400 mr-1 hover:bg-blue-400 hover:text-white">Save
                        & Close</button> --}}
                    <button
                        class="text-sm py-2 px-2 bg-white border border-blue-400 hover:bg-blue-400 hover:text-white">Save &
                        New</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>