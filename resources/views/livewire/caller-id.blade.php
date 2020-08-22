<div class="min-h-full min-w-full z-100 bg-blue-500 bg-opacity-50 fixed inset-0 pt-20 shadow-lg" id="calleridModal">
    <div class="flex flex-col bg-blue-200 border-blue-600 shadow rounded lg:w-1/2 m-auto p-1">
        <div class="flex flex-row bg-blue-600 px-2 rounded-t">
            <div class="sm:w-11/12 py-2">
                <h3 class="mx-auto text-blue-100 ">CallerId Configurations</h3>
            </div>
            <div class="sm:w-1/12 mt-2">
                <a class="bg-blue-100 rounded-sm text-blue-600 px-3 py-2 closeModal cursor-pointer">Exit</a>
            </div>
        </div>
        <div class="flex mt-2 -my-5">
            <button class="border border-blue-400 text-sm px-2 py-1">CallerId</button>
            <button class="border border-blue-400 text-sm px-2 py-1">Payment Gateway Details</button>
        </div>
        <div class="bg-blue-100 mt-4 p-2 border border-blue-400">
            <header class="bg-green-400 px-2 py-1 text-sm ">    
                CallerId Settings          
            </header>
            <div class="flex my-2">
                <legend class="text-sm">Select Type: </legend>
              
              <div class="flex justify-around border-b-0">
                <div class="flex">
                    <input type="checkbox" name=""  class="text-blue-400">
                    <label for="" class="text-sm">Analog</label>
                </div>
                <div class="flex">
                    <input type="checkbox" name=""  class="text-blue-400">
                    <label for="" class="text-sm">Digital TAPI</label>
                </div>
                <div class="flex">
                    <input type="checkbox" name=""  class="text-blue-400">
                    <label for="" class="text-sm">Voip SIP</label>
                </div>
                <div class="flex">
                    <input type="checkbox" name=""  class="text-blue-400">
                    <label for="" class="text-sm">File Based CLI</label>
                </div>
              </div>
            </div>
            <div class="flex">
                <button class="border border-blue-400 border-b-0 text-sm px-2 py-1 mr-1">Analog</button>
                <button class="border border-blue-400 border-b-0 text-sm px-2 py-1 mr-1">Digital TAPI</button>
                <button class="border border-blue-400 border-b-0 text-sm px-2 py-1 mr-1">Voip SIP</button>
                <button class="border border-blue-400 border-b-0 text-sm px-2 py-1">File Based CLI</button>
            </div>
            <div class="bg-white border border-blue-300 p-2">
                <div class="flex flex-start pr-2 mr-2">
                    <div>
                        <input type="radio" name=""  class="bg-blue-400">
                        <label class="text-sm">Serial Port</label>
                    </div>
                    <div>
                        <input type="radio" name=""  class="bg-blue-400">
                        <label class="text-sm">Ethernet</label>
                    </div>
                </div>
                <div class="border border-300 p-2 w-4/5">
                    <legend class="text-sm">COM Serial Port Settings</legend>
                    <div class="flex justify-around">
                        <div class="flex flex-col">
                            <label for="" class="text-sm">COM Port</label>
                            <select name=""  class="h-5 text-xs">
                                <option value="">Choose</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label for="" class="text-sm">Baud Rate</label>
                            <select name=""  class="h-5 text-xs">
                                <option value="">Choose</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label for="" class="text-sm">Parity</label>
                            <select name=""  class="h-5 text-xs">
                                <option value="">Choose</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label for="" class="text-sm">Data Bits</label>
                            <select name=""  class="h-5 text-xs">
                                <option value="">Choose</option>
                            </select>
                        </div>
                        <div class="flex flex-col">
                            <label for="" class="text-sm">Stop Bits</label>
                            <select name=""  class="h-5 text-xs">
                                <option value="">Choose</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex mt-2 justify-end">
            <button
                class="text-sm py-2 px-2 bg-white border border-blue-400 mr-1 hover:bg-blue-400 hover:text-white">Save
                & Close</button>
            <button
                class="text-sm py-2 px-2 bg-white border border-blue-400 hover:bg-blue-400 hover:text-white">Save
                &
                New</button>
        </div>
    </div>

</div>