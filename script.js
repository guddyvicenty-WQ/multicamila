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