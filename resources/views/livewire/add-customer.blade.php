<div class="min-h-full min-w-full z-100 bg-blue-500 bg-opacity-50 fixed inset-0 pt-20 shadow-lg "
    id="customerModal">
    <div class="flex flex-col bg-blue-200 border-blue-600 shadow rounded lg:w-1/2 m-auto p-1">
        <div class="flex flex-row bg-blue-600 px-2 rounded-t">
            <div class="sm:w-11/12 py-2">
                <h3 class="mx-auto text-blue-100 ">Customer</h3>
            </div>
            <div class="sm:w-1/12 mt-2">
                <a class="bg-blue-100 rounded-sm text-blue-600 px-3 py-2 closeModal cursor-pointer">Exit</a>
            </div>
        </div>
        <div class="bg-blue-100 mt-4 p-2">
            <div class="flex mt-1 justify-end">
                <div class="">
                    <label for="" class="text-sm mr-1">Total Calls</label>
                    <input type="number" class="text-xs w-1/6">
                </div>
            </div>
            <div class="flex mt-2">
                <div class="w-1/2 p-2">
                    <div class="flex">
                        <label for="" class="text-sm w-2/5">Name</label>
                        <input type="text" class="w-3/5 text-sm px-2">
                    </div>
                    <div class="flex mt-1">
                        <label for="" class="text-sm w-2/5">Email</label>
                        <input type="text" class="w-3/5 text-sm px-2">
                    </div>
                    <div class="flex mt-1">
                        <label for="" class="text-sm w-2/5">Telephone No</label>
                        <input type="text" class="w-3/5 text-sm px-2">
                    </div>
                </div>
                <div class="w-1/2 p-2">
                    <div class="flex">
                        <input type="checkbox" name="" id="" class="text-blue-400 mr-2">
                        <label class="text-sm"> Black List</label>
                    </div>
                    <div class="flex mt-1">
                        <label class="text-sm w-2/5">Mobile No</label>
                        <input type="text" class="w-3/5 text-sm px-2">
                    </div>
                    <div class="flex mt-1">
                        <label class="text-sm w-2/5">Fax</label>
                        <input type="text" class="w-3/5 text-sm px-2">
                    </div>
                </div>
            </div>
            <label for="" class="bg-blue-400 text-white px-2 py-1 text-sm mt-2">Address Information</label>
            <div class="flex flex-col mt-2">
                <div class="flex">                                          
                    <label class="w-2/5 text-sm">Door No</label>
                    <input class="w-3/5 text-sm px-2">
                </div>
                <div class="flex mt-1">
                    <label class="w-2/5 text-sm">Address 1:</label>
                    <textarea class="w-3/5 h-16 text-sm px-2"></textarea>
                </div>
                <div class="flex mt-1">
                    <label class="w-2/5 text-sm">Address 2:</label>
                    <textarea class="w-3/5 h-16 text-sm px-2"></textarea>
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

</div>