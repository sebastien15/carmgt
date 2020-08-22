<div class="min-h-full min-w-full z-100 bg-blue-500 bg-opacity-50 fixed inset-0 pt-20 shadow-lg " id="zoneModal">
    <div class="flex flex-col bg-blue-200 border-blue-600 shadow rounded lg:w-1/2 m-auto p-1">
        <div class="flex flex-row bg-blue-600 px-2 rounded-t">
            <div class="sm:w-11/12 py-2">
                <h3 class="mx-auto text-blue-100 ">Zones</h3>
            </div>
            <div class="sm:w-1/12 mt-2">
                <a class="bg-blue-100 rounded-sm text-blue-600 px-3 py-2 closeModal cursor-pointer">Exit</a>
            </div>
        </div>
        <div class="bg-blue-100 mt-4 p-2">
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
            @if ($errors->any())
                <div class="bg-red-400 rounded">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li class="text-xs text-white ">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="flex flex-col mt-2">
                <div class="flex">
                    <div class="w-1/2">
                        <label class="text-sm">Zone Name</label>
                        <input class="text-sm px-2" name="name" wire:model.debounce500ms='name'>
                    </div>
                    <div class="w-1/2">
                        <input class="text-sm px-2 text-blue-400" type="checkbox">
                        <label class="text-sm">Base</label>
                    </div>
                </div>
                <label for="" class="bg-blue-400 text-white px-2 py-1 text-sm mt-2">Associated Post Codes</label>
                <div class="flex p-2 mt-2">
                    <div class="w-1/2">
                        <label class="text-sm">Post Code</label>
                        <input class="text-sm px-2 w-1/2" name="post_code" wire:model.debounce500ms='post_code'>
                    </div>
                    <div class="w-1/2">
                        <button
                            class="px-2 p-1 text-sm border border-blue hover:bg-blue-400 hover:text-white">Add</button>
                        <button
                            class="px-2 p-1 text-sm border border-blue hover:bg-blue-400 hover:text-white">New</button>
                    </div>
                </div>
                <div class="flex mt-1 shadow-sm p-2">
                    <div class="w-8/12 shadow-sm px-2">
                        <table class="w-full">
                            <thead class="w-full bg-blue-400">
                                <tr class="text-white">
                                    <td class="text-xs border border-r-blue-400">Post Code</td>
                                    <td class="text-xs">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-xs">eeee</td>
                                    <td><input type="checkbox" name=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="w-3/12">
                        <button
                            class="text-sm px-2 py-1 border border-blue-400 hover:bg-blue-400 hover:text-white w-5/6 mx-auto"><i
                                class="fa fa-arrow-up"></i> Move Up</button>
                        <button
                            class="text-sm px-2 py-1 border border-blue-400 mt-1 hover:bg-blue-400 hover:text-white w-5/6 mx-auto"><i
                                class="fa fa-arrow-down"></i>Move Down</button>
                    </div>
                </div>
            </div>
            <div class="flex mt-2 justify-end">
                <button
                    class="text-sm py-2 px-2 bg-white border border-blue-400 mr-1 hover:bg-blue-400 hover:text-white" type="submit" wire:click="$emit('addZone')">Save
                    & Close</button>
                <button
                    class="text-sm py-2 px-2 bg-white border border-blue-400 hover:bg-blue-400 hover:text-white"  type="submit" wire:click="$emit('addZone')">Save
                    &
                    New</button>
            </div>
        </div>
    </div>

</div>