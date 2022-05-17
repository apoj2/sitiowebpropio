const nav = document.querySelector('.nav');

window.addEventListener('scroll', function(){
    nav.classList.toggle('active', window.scrollY > 0)
});

document.querySelector('.boton-menu').addEventListener('click', () =>
{
    document.querySelector('.barra-listas').classList.toggle('show');
});
ScrollReveal().reveal('.carousel');
ScrollReveal().reveal('.solucionesdecarpado', { delay:500});
ScrollReveal().reveal('.seccionessoluciones', { delay:500});
ScrollReveal().reveal('.servicio', { delay:500});
ScrollReveal().reveal('.servicios', { delay:500});
ScrollReveal().reveal('.banner-contacto', { delay:500});

ScrollReveal().reveal('.Gallerya', { delay:1500});


