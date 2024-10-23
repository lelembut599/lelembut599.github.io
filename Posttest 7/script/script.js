// Hamburger Menu Toggle
const menuBtn = document.querySelector('.menu-btn');
const navLinks = document.querySelector('.nav-links');

menuBtn.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});

// Dark Mode Toggle
const darkModeToggle = document.getElementById('darkModeToggle');
const body = document.body;

darkModeToggle.addEventListener('change', () => {
    body.classList.toggle('dark-mode');
});

const learnMoreButtons = document.querySelectorAll('.learn-more');

learnMoreButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        event.preventDefault(); 
        alert('Coming Soon !!!');
    });
});


//popup
let popup = document.getElementById("popup");
let overlay = document.getElementById("overlay");

function openPopup() {
    popup.classList.add("open-popup");
    overlay.classList.add("open-overlay"); 
}

function closePopup() {
    popup.classList.remove("open-popup");
    overlay.classList.remove("open-overlay");
}