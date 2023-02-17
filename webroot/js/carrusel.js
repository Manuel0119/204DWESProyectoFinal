const carouselRow = document.querySelector('.slides-row');
const carouselSlides = document.getElementsByClassName('slide');
const puntos = document.getElementsByClassName('punto');
const btnAnterior = document.querySelector('.anterior');
const btnSiguiente = document.querySelector('.siguiente');

let index = 1;
var anchura;

function anchuraSlide() {
    anchura = carouselSlides[0].clientWidth;
}
anchuraSlide();
window.addEventListener('resize', anchuraSlide);
carouselRow.style.transform = 'translateX(' + (-anchura * index) + 'px)';

btnSiguiente.addEventListener('click', siguienteSlide);
function siguienteSlide() {
    if (index >= carouselSlides.length - 1) {
        return
    }
    carouselRow.style.transition = 'transform 0.4s ease-out';
    index++;
    carouselRow.style.transform = 'translateX(' + (-anchura * index) + 'px)';
    puntosLabel();
}

btnAnterior.addEventListener('click', anteriorSlide);
function anteriorSlide() {
    if (index <= 0) {
        return
    }
    carouselRow.style.transition = 'transform 0.4s ease-out';
    index--;
    carouselRow.style.transform = 'translateX(' + (-anchura * index) + 'px)';
    puntosLabel();
}
;

carouselRow.addEventListener('transitionend', function () {
    if (carouselSlides[index].id === 'primeraImagenDuplicada') {
        carouselRow.style.transition = 'none';
        index = carouselSlides.length - index;
        carouselRow.style.transform = 'translateX(' + (-anchura * index) + 'px)';
        puntosLabel();
    }
    ;
    if (carouselSlides[index].id === 'ultimaImagenDuplicada') {
        carouselRow.style.transition = 'none';
        index = carouselSlides.length - 2;
        carouselRow.style.transform = 'translateX(' + (-anchura * index) + 'px)';
        puntosLabel();
    }
    ;
});

function autoslide() {
    deleteInterval = setInterval(timer, 5000);
    function timer() {
        siguienteSlide();
    }
}
;
autoslide();

const mainContainer = document.querySelector('.container');
mainContainer.addEventListener('mouseover', function () {
    clearInterval(deleteInterval);
});

mainContainer.addEventListener('mouseout', autoslide);

function puntosLabel() {
    for (let i = 0; i < puntos.length; i++) {
        puntos[i].className = puntos[i].className.replace(' activo', '');
    }
    puntos[index - 1].className += ' activo';
}