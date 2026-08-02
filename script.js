const body = document.querySelector('body');
const botonModo = document.querySelector('#btn-tema');

let esOscuro = false;

function alternarModo() {
    body.classList.toggle('oscuro');
    esOscuro = !esOscuro;
    
    if (esOscuro) {
        botonModo.textContent = '🌙 Cambiar a modo claro';
    } else {
        botonModo.textContent = '☀️ Cambiar a modo oscuro';
    }
}

botonModo.addEventListener('click', alternarModo);

function cambiarTexto() {
    const header = document.querySelector('header h1');
    if (header.textContent === '¡Bienvenido al Multicentro Camila!') {
        header.textContent = '¡Explora nuestros productos!';
    } else {
        header.textContent = '¡Bienvenido al Multicentro Camila!';
    }   
}

const botonTexto = document.querySelector('#btn-tema2');
botonTexto.addEventListener('click', cambiarTexto);