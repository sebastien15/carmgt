// location model close
const showLocation   = document.querySelectorAll('#showLocation')
const locationModal  = document.querySelectorAll('#loc-model')
const closeModal     = document.querySelectorAll(".closeModal")
const showDriver     = document.querySelectorAll('#showDriver')
const driverModal    = document.querySelectorAll('#driverModel')
const showBooking    = document.querySelectorAll('#showBooking')
const bookModal      = document.querySelectorAll('#bookModal')
const showFare       = document.querySelectorAll('#showFare')
const fareModal      = document.querySelectorAll('#faremodal')
const showVehicle    = document.querySelectorAll('#showvehicle')
const vehicleModal   = document.querySelectorAll('#vehicleModal')
const showCustomer   = document.querySelectorAll('#showcustomer')
const customerModal  = document.querySelectorAll('#customerModal')
const showCallerid   = document.querySelectorAll('#showcallerid')
const calleridModal  = document.querySelectorAll('#calleridModal')
const showZone       = document.querySelectorAll('#showzone')
const zoneModal      = document.querySelectorAll('#zoneModal')


//location starts
closeModal.forEach(element => {
    element.addEventListener('click', () => {
        locationModal[0].classList.add("hidden")
    })
});

showLocation[0].addEventListener("click", () => {
    locationModal[0].classList.remove("hidden")
    locationModal[0].classList.add("block", 'opacity-100')    
})
//location modal ends


//driver modal starts

closeModal.forEach(element => {
    element.addEventListener('click', () => {
        driverModal[0].classList.add('hidden')
    })
})

showDriver[0].addEventListener('click', () => {
    driverModal[0].classList.remove('hidden')
    driverModal[0].classList.add('block','opacity-100')
})

//driver modal ends

//Book modal starts

closeModal.forEach(element => {
    element.addEventListener('click', () => {
        bookModal[0].classList.add('hidden')
    })
})
showBooking[0].addEventListener('click', () => {
    bookModal[0].classList.remove('hidden')
    bookModal[0].classList.add('block', 'opacity-100')
})

//Book modal ends
//Fare modal starts

closeModal.forEach(element => {
    element.addEventListener('click', () => {
        fareModal[0].classList.add('hidden')
    })
})
showFare[0].addEventListener('click', () => {
    fareModal[0].classList.remove('hidden')
    fareModal[0].classList.add('block', 'opacity-100') 
})

//Fare modal ends

//Vehicle modal starts

closeModal.forEach(element => {
    element.addEventListener('click', () => {
        vehicleModal[0].classList.add('hidden')        
    })
})
showVehicle[0].addEventListener('click', () => {
    vehicleModal[0].classList.remove('hidden')
    vehicleModal[0].classList.add('block', 'opacity-100')
})

//Vehicle modal ends

//Customer modal starts

closeModal.forEach(element => {
    element.addEventListener('click', () => {
        customerModal[0].classList.add('hidden')
    })
})
showCustomer[0].addEventListener('click', () => {
    customerModal[0].classList.remove('hidden')
    customerModal[0].classList.add('block', 'opacity-100')
})

//Customer modal ends
//Zone modal starts

closeModal.forEach(element => {
    element.addEventListener('click', () => {
        zoneModal[0].classList.add('hidden') 
    })
})
showZone[0].addEventListener('click', () => {
    zoneModal[0].classList.remove('hidden')
    zoneModal[0].classList.add('block', 'opacity-100')
})

//Zone modal ends
//caller id modal starts

closeModal.forEach(element => {
    element.addEventListener('click', () => {
        calleridModal[0].classList.add('hidden')        
    })
})          
showCallerid[0].addEventListener('click', () => {
    calleridModal[0].classList.remove('hidden')
    calleridModal[0].classList.add('block', 'opacity-100')
})

//caller id modal ends

window.addEventListener("click", (e)=> {
    if (e.target == locationModal[0]) {
        locationModal[0].classList.add("hidden")
    } else if (e.target == driverModal[0]) {
        driverModal[0].classList.add('hidden')
    } else if (e.target == bookModal[0]) {
        bookModal[0].classList.add('hidden')
    } else if (e.target == fareModal[0]) {
        fareModal[0].classList.add('hidden')
    } else if (e.target == vehicleModal[0]) {
        vehicleModal[0].classList.add('hidden')
    } else if (e.target == customerModal[0]) {
        customerModal[0].classList.add('hidden')
    } else if (e.target == calleridModal[0]) {
        calleridModal[0].classList.add('hidden')
    } else if (e.target == zoneModal[0]) {
        zoneModal[0].classList.add('hidden')
    }
})

// create panels

function driverPanels(id, e) {
    e.target.classList.add('bg-blue-100');
    const allPanels = document.querySelectorAll('.driver-panels');
    allPanels.forEach(element => {
        element.classList.add('hidden');
        if (element.id == id) {
            element.classList.remove('hidden');
            element.classList.add('block');
        }
    })
}
// nav opening function
{
    let nav = document.querySelector('.nav')
    let navOpener = document.querySelector('.navOpener')
    let navOpenerul = document.querySelector('.navOpener ul')
    let bar1 = document.querySelector('.bar1')
    let bar2 = document.querySelector('.bar2')
    let bar3 = document.querySelector('.bar3')
    navOpener.addEventListener('click',()=>{
        nav.classList.toggle('hidden')
        bar1.classList.toggle('bar45');
        bar2.classList.toggle('bar-45');
        bar3.classList.toggle('hidden');
        navOpenerul.classList.toggle('py-2');
    })
}

// sidebar open

{
    let sidebarOPener = document.querySelector('.sidebarOPener')
    let clicked = true
    sidebarOPener.addEventListener('click',()=>{
        let sidebar = document.querySelector('.sidebarNav')
            let sidebarLink = document.querySelectorAll('.sidebarNav a')
        if (clicked) {
            sidebar.style.right= '10%;';
                sidebar.style.width = '140px';
            sidebarLink.forEach(element => {
                element.style.opacity= '1';
                element.style.display= 'block';
            });
            sidebarOPener.style.right = '140px';
        }else{
            sidebar.style.width = '0px';
            sidebarLink.forEach(element => {
                element.style.opacity= '0';
                element.style.display= 'none';
            });
            sidebarOPener.style.right = '0px';
        }
        clicked = !clicked
    })
}

