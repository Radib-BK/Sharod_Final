// MENU TOGGLE
const myMenu = document.querySelector('.menu-toggle');
const myList = document.querySelector('.nav-list');

myMenu.addEventListener('click', () => {
    myMenu.classList.toggle('show');
    myList.classList.toggle('show');
});

// CLOSE THE NAV WHEN NAVLNKS ARE CLICKED
let navLinks = document.querySelectorAll('.nav-list a');

navLinks.forEach(function (navLink) {
    navLink.addEventListener('click', function () {
        myList.classList.remove('show');
    })
})