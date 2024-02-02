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

// Instantiate a new Splide carousel with the class 'splide-articles'.
var splideArticles = new Splide('.splide-articles', {
    // Set the type of carousel to 'loop', meaning it will loop through slides endlessly.
    type: 'loop',
    // Define the number of slides to move per interaction.
    perMove: 1,
    // Set the number of slides to display per view.
    perPage: 4,
    // Define breakpoints for responsive behavior.
    breakpoints: {
        // At a viewport width of 640 pixels or less:
        640: {
            // Change the number of slides to display per view to 1.
            perPage: 1,
        },
    },
});

// Mount the Splide carousel instance.
splideArticles.mount();



function toggleIconClass() {
    var icon = document.getElementById('toggle-icon');
    // Verifica se a classe atual é 'fa-angle-down'
    if (icon.classList.contains('fa-angle-down')) {
      // Se sim, remove 'fa-angle-down' e adiciona 'fa-angle-up'
      icon.classList.remove('fa-angle-down');
      icon.classList.add('fa-angle-up');
    } else {
      // Caso contrário, remove 'fa-angle-up' e adiciona 'fa-angle-down'
      icon.classList.remove('fa-angle-up');
      icon.classList.add('fa-angle-down');
    }
  }


