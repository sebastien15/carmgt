<div class="flex sm:hidden pt-3 px-5">
    <div class="w-8/12">Taxi managment system</div>
    <div class="w-4/12 navOpener ">
        <ul class="flex flex-col w-3/12 p-1 border border-blue-400 ml-auto">
            <li class="w-full h-1 bg-white bar1"></li>
            <li class="w-full h-1 bg-white mt-1 bar2"></li>
            <li class="w-full h-1 bg-white mt-1 bar3"></li>
        </ul>
    </div>
</div>
<div class="nav mt-2 bg-white sm:bg-transparent hidden sm:flex flex-col items-center sm:flex-row h-16 absolute z-5 sm:relative">
    <a class="font-bold text-xs p-2 text-gray-900 mr-2 hover:bg-blue-400 rounded cursor-pointer">File</a>
    <a class="font-bold text-xs p-2 text-gray-900 mr-2 hover:bg-blue-400 rounded cursor-pointer">View</a>
    <a class="font-bold text-xs p-2 text-gray-900 mr-2 hover:bg-blue-400 rounded cursor-pointer">Booking</a>
    <a class="font-bold text-xs p-2 text-gray-900 mr-2 hover:bg-blue-400 rounded cursor-pointer">Finance</a>
    <a class="font-bold text-xs p-2 text-gray-900 mr-2 hover:bg-blue-400 rounded cursor-pointer">User managment</a>
    <a class="font-bold text-xs p-2 text-gray-900 mr-2 hover:bg-blue-400 rounded cursor-pointer">Plotting</a>
    <a class="font-bold text-xs p-2 text-gray-900 mr-2 hover:bg-blue-400 rounded cursor-pointer">Reports</a>
    <a class="font-bold text-xs p-2 text-gray-900 mr-2 hover:bg-blue-400 rounded cursor-pointer">Managment</a>
    <a class="font-bold text-xs p-2 text-gray-900 mr-2 hover:bg-blue-400 rounded cursor-pointer">Help</a>
</div>
<div class="sidebarNav mt-1 bg-white bg-opacity-100 sm:bg-opacity-50 fixed sm:relative w-0 sm:w-full right-0 sm:flex shadow-md p-1 rounded-sm">
    <a href="" class="hidden sm:flex sm:mt-0 flex-col bg-white bg-opacity-100 sm:bg-opactiy-50 sm:hover:bg-opacity-75 p-2 text-xl items-center mr-2">
        <span class=" text-xl "><i class="fa fa-home"></i></span>
        <span class="text-gray-900  text-sm ">Dashboard</span>
    </a>
    <a class="hidden sm:flex mt-1 sm:mt-0 flex-col bg-white bg-opacity-100 sm:bg-opactiy-50 sm:hover:bg-opacity-75 p-2 text-xl items-center mr-2 hidden" id="showzone">
        <span class=" text-xl"><i class="fa fa-home"></i></span>
        <span class="text-gray-900  text-sm">Zone</span>
    </a>
    <a class="hidden sm:flex mt-1 sm:mt-0 flex-col bg-white bg-opacity-100 sm:bg-opactiy-50 sm:hover:bg-opacity-75 p-2 text-xl items-center mr-2 cursor-pointer" id="showBooking">
        <span class=" text-xl"><i class="fa fa-plus"></i></span>
        <span class="text-gray-900  text-sm">New Booking</span>
    </a>
    <a href="" class="hidden sm:flex mt-1 sm:mt-0 flex-col bg-white bg-opacity-100 sm:bg-opactiy-50 sm:hover:bg-opacity-75 p-1 text-xl items-center mr-2 cursor-pointer">
        <span class=" text-xl"><i class="fa fa-book"></i></span>
        <span class="text-gray-900  text-sm">Booking</span>
    </a>
    <a class="hidden sm:flex mt-1 sm:mt-0 flex-col bg-white bg-opacity-100 sm:bg-opactiy-50 sm:hover:bg-opacity-75 p-1 text-xl items-center mr-2 cursor-pointer" id="showFare">
        <span class=" text-xl"><i class="fa fa-money"></i></span>
        <span class="text-gray-900  text-sm">Fares</span>
    </a>
    <a class="hidden sm:flex mt-1 sm:mt-0 flex-col bg-white bg-opacity-100 sm:bg-opactiy-50 sm:hover:bg-opacity-75 p-1 text-xl items-center mr-2 cursor-pointer" id="showDriver">
        <span class=" text-xl"><i class="fa fa-user"></i></span>
        <span class="text-gray-900  text-sm">Driver</span>
    </a>
    <a class="hidden sm:flex mt-1 sm:mt-0 flex-col bg-white bg-opacity-100 sm:bg-opactiy-50 sm:hover:bg-opacity-75 p-1 text-xl items-center mr-2 cursor-pointer" id="showLocation">
        <span class=" text-xl"><i class="fa fa-map-marker-alt"></i></span>
        <span class="text-gray-900  text-sm">Location</span>
    </a>
    <a class="hidden sm:flex mt-1 sm:mt-0 flex-col bg-white bg-opacity-100 sm:bg-opactiy-50 sm:hover:bg-opacity-75 p-1 text-xl items-center mr-2 cursor-pointer" id="showcustomer">
        <span class=" text-xl"><i class="fa fa-users"></i></span>
        <span class="text-gray-900  text-sm">Customer</span>
    </a>
    <a class="hidden sm:flex mt-1 sm:mt-0 flex-col bg-white bg-opacity-100 sm:bg-opactiy-50 sm:hover:bg-opacity-75 p-1 text-xl items-center mr-2 cursor-pointer" id="showvehicle">
        <span class=" text-xl"><i class="fa fa-car"></i></span>
        <span class="text-gray-900  text-sm">Vehicle</span>
    </a>
    <a class="hidden sm:flex mt-1 sm:mt-0 flex-col bg-white bg-opacity-100 sm:bg-opactiy-50 sm:hover:bg-opacity-75 p-1 text-xl items-center mr-2 cursor-pointer" id="showcallerid">
        <span class=" text-xl"><i class="fa fa-map"></i></span>
        <span class="text-gray-900  text-sm">Caller Id</span>
    </a>
    <a href="" class="hidden sm:flex mt-1 sm:mt-0 flex-col bg-white bg-opacity-100 sm:bg-opactiy-50 sm:hover:bg-opacity-75 p-1 text-xl items-center mr-2">
        <span class=" text-xl"><i class="fa fa-setting"></i></span>
        <span class="text-gray-900  text-sm">Settings</span>
    </a>
    <a href="" class="hidden sm:flex mt-1 sm:mt-0 flex-col bg-white bg-opacity-100 sm:bg-opactiy-50 sm:hover:bg-opacity-75 p-1 text-xl items-center mr-2">
        <span class=" text-xl"><i class="fa fa-refresh"></i></span>
        <span class="text-gray-900  text-sm">Refresh</span>
    </a>
    <a href="" class="hidden sm:block mt-1 sm:mt-0 bg-blue-700 p-1 my-4 rounded-md text-gray-800 text-md mr-2">Log out
    </a>
    <span class="hidden sm:block mt-4 sm:mt-0 my-auto">
        Monday, June 29, 22:54:94
    </span>
</div>
<div class="sidebarOPener py-2 px-1 text-blue-500 text-xl font-extrabold fixed cursor-pointer z-20 right-0 block sm:hidden bg-blue-100" style="top: 40%;"><</div>