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


// Inicializa uma variável para rastrear o estado do menu
var menuOpen = false;

function toggleMenu() {
    // Obtém o elemento span com o ID 'menuSymbol'
    var menuSymbol = document.getElementById('menu-icon');

    // Alterna entre 'menu' e 'menu_open' com base no estado atual do menu
    if (menuOpen) {
        menuSymbol.textContent = 'menu';
    } else {
        menuSymbol.textContent = 'close';
    }

    // Inverte o estado do menu
    menuOpen = !menuOpen;
}
