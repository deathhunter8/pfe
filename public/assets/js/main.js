const toggle = document.getElementById('toggle');
const navMenu = document.getElementById('navbarMenus');

toggle.addEventListener('click', () => {
 toggle.classList.toggle('active');
 navMenu.classList.toggle('active');
});
window.addEventListener('click', (event) => {
 let navBodyFinder =
    event.target.id !== 'toggle' &&
    event.target.id !== 'navbarMenus' &&
    event.target.id !== 'navBody' &&
    event.target.className !== 'navList';

 if (navBodyFinder) {
    toggle.classList.remove('active');
    navMenu.classList.remove('active');
 }
});