/* JavaScript function to change the icon when hovering over the menu item */
// Function to change the icon to 'expand_less'
function changeIcon(element) {
    // Update the content of the span with the specified class
    element.querySelector('.material-symbols-outlined').textContent = 'expand_less';
}

// Function to reset the icon to 'expand_more' when the mouse leaves the menu item
function resetIcon(element) {
    // Update the content of the span with the specified class
    element.querySelector('.material-symbols-outlined').textContent = 'expand_more';
}


// Initialize a variable to track the menu state
var menuOpen = false;

function toggleMenu() {
    // Get the span element with the ID 'menu-icon'
    var menuSymbol = document.getElementById('menu-icon');

    // Toggle between 'menu' and 'close' based on the current menu state
    if (menuOpen) {
        menuSymbol.textContent = 'menu';
    } else {
        menuSymbol.textContent = 'close';
    }

    // Invert the menu state
    menuOpen = !menuOpen;
}

var splideArticles = new Splide('.splide-articles', {
    type: 'loop',
    perMove: 1,
    perPage: 4,
    breakpoints: {
        640: {
            perPage: 1,
        },
    },
});

splideArticles.mount();

