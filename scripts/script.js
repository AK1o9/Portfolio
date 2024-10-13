// Custom Cursor
const coords = { x: 0, y: 0 };
const circles = document.querySelectorAll(".circle");

circles.forEach(function (circle) {
    circle.x = 0;
    circle.y = 0;
});

window.addEventListener("mousemove", function (e) {
    coords.x = e.clientX;
    coords.y = e.clientY;
})

function animateCircles() {
    let x = coords.x;
    let y = coords.y;

    circles.forEach(function (circle, index) {
        circle.style.left = x - 16/* 15 */ + "px"
        circle.style.top = y - 16/* 10 */ + "px"

        circle.style.scale = (circles.length - index) / circles.length;

        circle.x = x;
        circle.y = y;

        const nextCircle = circles[index + 1] || circles[0];
        x += (nextCircle.x - x) * 0.3;
        y += (nextCircle.y - y) * 0.3;
    });

    requestAnimationFrame(animateCircles);
}

animateCircles();


//Hamburger toggle - for mobile devices
let hamburgerButton = document.getElementsByClassName('hamburger')[0];
let navbarLinks = document.getElementsByClassName('links')[0];

hamburgerButton.addEventListener('click', () => {
    hamburgerButton.classList.toggle('active');
    navbarLinks.classList.toggle('active');
})

//Active Navbar (for vertical scrolling)
let sections = document.querySelectorAll('section');
let navLinksAll = document.querySelectorAll('header nav div a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navLinksAll.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav div a[href*=' + id + ']').classList.add('active');
            });
        };
    });
}
//typed js
const typed = new Typed('.multiple-text', {
    strings: ['Software Engineer', 'Web Developer', 'Frontend Developer', 'Game Developer', 'Mobile App Developer'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 300,
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
