const nav = document.querySelector('.nav');

window.addEventListener('scroll', function(){
    nav.classList.toggle('active', window.scrollY > 0)
});

document.querySelector('.boton-menu').addEventListener('click', () =>
{
    document.querySelector('.barra-listas').classList.toggle('show');
});
ScrollReveal().reveal('.servicios2');
