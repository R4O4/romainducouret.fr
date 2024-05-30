const menu = document.querySelector('nav');
const button = document.querySelector('.menuBtn');
const menuBtnIco = document.querySelector('.menuBtn img');
const menuItems = document.querySelectorAll('nav a');

// OPen menu when button is clicked
button.addEventListener('click', () => {
  // if menu is open, close it
  if (menu.classList.contains('open')) {
    menu.classList.remove('open');
    menu.classList.add('close');
    menuBtnIco.src = 'view/src/img/menu.svg';
  } else {
    // if menu is closed, open it
    menu.classList.add('open');
    menu.classList.remove('close');
    menuBtnIco.src = 'view/src/img/close.svg';
  }
});

// Close menu when a menu item is clicked
menuItems.forEach((item) => {
  item.addEventListener('click', () => {
    menu.classList.remove('open');
    menu.classList.add('close');
    menuBtnIco.src = 'view/src/img/menu.svg';
  });
});