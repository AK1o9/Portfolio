//Active Navbar (for vertical scrolling)
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        };
    });
}

//typed js
const typed = new Typed('.multiple-text', {
    strings: ['Software Engineer', 'Full-stack Developer', 'Web Developer', 'Game Developer', 'Mobile App Developer'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 200,
    loop: true,
});

//Show toast notification
let toastBox = document.getElementById('toast-box');
let successMsg = "<i class='bx bx-check'></i> Successfully submited!";
let errorMsg = "<i class='bx bx-error-alt' ></i> Oops! We ran into error.";
let invalidMsg = "<i class='bx bx-calendar-exclamation'></i> Invalid input, please try again.";
let missingUrlMsg = "<i class='bx bx-unlink' ></i> Sorry! This link isn't available at the moment.";

function showToast(msg) {
    let toast = document.createElement('div')
    toast.classList.add('toast');
    toast.innerHTML = msg;
    toastBox.appendChild(toast);

    if (msg.includes('error')) {
        toast.classList.add('error');
    }
    if (msg.includes('Invalid')) {
        toast.classList.add('invalid');
    }
    if (msg.includes('link')) {
        toast.classList.add('missing-url');
    }

    setTimeout(() => {
        toast.remove();
    }, 6000); //in ms
}

//Page Sliding effect
//TODO

//Page Swiper effect
// var swiper = new Swiper(
//     '.swiper-container', {
//     direction: 'vertical',
//     sliderPerView: 1,
//     spaceBetween: 0,
//     mousewheel: true,
//     pagination: {
//         el: '.swiper-pagination',
//         type: 'progressbar'
//     }
// }
// )

//Project scroll
// window.onmousedown = e => {
//     e.clientX;
// }

// window.onmousemove = e => {
//     if(track.dataset.mouseDownAt === "0") return;

//     const mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX,
//         maxDelta = window.innerWidth / 2;

//     const percentage = (mouseDelta / maxDelta) * 100;
//     const nextPercentage = parseFloat(track.dataset.prevPercentage) + percentage;

//     track.dataset.percentage = nextPercentage;

//     track.animate({
//         transform: 'translate('+ nextPercentage + '%, -50%)'
//     }, {duration:1200, fill:'forwards'});
// }

// window.onmouseup = () => {
//     track.dataset.mouseDownAt = "0";
//     track.dataset.prevPercentage = track.dataset.percentage;
// }

// $("button").click(clickProjectButton());


function enableInkCursor() {
    //TODO (optional)
}
