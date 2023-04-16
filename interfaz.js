

const navLinks = document.querySelectorAll('.nav a');

navLinks.forEach(link => {
  link.addEventListener('click', () => {
    const nav = document.querySelector('.nav');
    nav.classList.remove('activo');
  });
});

const button = document.querySelector('.button');
const nav = document.querySelector('.nav');

button.addEventListener('click', () => {
  nav.classList.toggle('activo');
});

