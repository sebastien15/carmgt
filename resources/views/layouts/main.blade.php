<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Taxi managments system</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            @font-face {
                font-family: 'dotsfont';
                src: url('dotsfont-master/dist/dotsfont.eot');
                src: url('dotsfont-master/dist/dotsfont.eot?#iefix') format('embedded-opentype'),
                    url('dotsfont-master/dist/dotsfont.woff') format('woff'),
                    url('dotsfont-master/dist/dotsfont.ttf') format('truetype'),
                    url('dotsfont-master/dist/dotsfont.svg#dotsfontregular') format('svg');
            }
            body{
                font-family: lato;
            }
            #driver_pass{
                /* -webkit-text-security:disc; */
                font-family: dotsfont;
                font-size: 10px;
                max-width: 61%;                
            }
            .bar45 {
                transform:rotate(45deg);
                marging-top: 10px;
                margin-bottom: -4px;
            }
            .bar-45 {
                margin-top: 0px !important;
                transform: rotate(-45deg);
            }
        </style>
        @livewireStyles
        <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/clocklet@0.2.6/css/clocklet.min.css">
        
    </head>
    
    <body class="box-border bg-blue-200">
        <div class="container m-auto pb-5">
            @include('partials.topnav')
            @yield('content')
            <div class="flex z-10" style="margin-top:-1px;">
                <a href="" class="botNav bg-blue-200 py-1 px-2 mr-2 border-r border-l border-b border-blue-500 text-gray-700 text-sm">To day's booking</a>
                <a href="" class="botNav bg-blue-200 py-1 px-2 mr-2 border-r border-l border-b border-blue-500 text-gray-700 text-sm">Pre booking</a>
                <a href="" class="botNav bg-blue-200 py-1 px-2 mr-2 border-r border-l border-b border-blue-500 text-gray-700 text-sm">Search Jobs</a>
                <a href="" class="botNav bg-blue-200 py-1 px-2 mr-2 border-r border-l border-b border-blue-500 text-gray-700 text-sm">Recent Jobs</a>
                <a href="" class="botNav bg-blue-200 py-1 px-2 mr-2 border-r border-l border-b border-blue-500 text-gray-700 text-sm">Drive booking stats</a>
            </div>
        </div>        
        @livewireScripts
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            window.livewire.on('saveLocation',()=>{
                let succ = document.querySelectorAll('.success')
                let mod = document.querySelector('#loc-model')
                if (succ.length == 0) {
                    setTimeout(() => {
                        mod.classList.remove('block')
                        mod.classList.add('hidden')
                    }, 1000);
                }
            })
            function hidethem() {                
                const locationModal = document.querySelectorAll('#loc-model')
                const driverModal = document.querySelectorAll('#driverModel')
                const bookModal = document.querySelectorAll('#bookModal')
                const fareModal = document.querySelectorAll('#faremodal')
                const vehicleModal = document.querySelectorAll('#vehicleModal')
                const customerModal = document.querySelectorAll('#customerModal')
                const calleridModal = document.querySelectorAll('#calleridModal')
                const zoneModal = document.querySelectorAll('#zoneModal')
    
                fareModal[0].classList.add('hidden')
                driverModal[0].classList.add('hidden')
                locationModal[0].classList.add("hidden")            
                bookModal[0].classList.add('hidden')
                vehicleModal[0].classList.add('hidden')
                customerModal[0].classList.add('hidden')
                calleridModal[0].classList.add('hidden')
                zoneModal[0].classList.add('hidden')
            }
            window.onload = hidethem()
            window.livewire.on('fileChoosen', ()=> {
                let inputField = document.getElementById('profile');
                let file = inputField.files[0]
                let reader = new FileReader();
                reader.onloadend = ()=>{
                    window.livewire.emit('fileUpload',reader.result)
                }
                reader.readAsDataURL(file);
            })                   
            window.livewire.on('carImage', ()=> {
                let inputField = document.getElementById('carImage');
                let file = inputField.files[0]
                let reader = new FileReader();
                reader.onloadend = ()=>{
                    window.livewire.emit('fileUploaded',reader.result)
                }
                reader.readAsDataURL(file);
            })                   
        </script>
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
        // const flatpickr = require("flatpickr");
            flatpickr(".timerPicker");
        </script>
        <script>
            function activateInputSelectors(){
                setTimeout(() => {
                    let inputSelect = document.querySelectorAll('.inputSelect');
                    for (let i = 0; i < inputSelect.length; i++) {
                        const element = inputSelect[i];
                        element.addEventListener('click',()=>{
                            element.classList.toggle('bg-blue-400')
                        })                      
                    }
                }, 1000);
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/clocklet@0.2.6"></script>
    </body>
</html>