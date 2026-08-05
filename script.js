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

const botonform = document.querySelector('#form-contacto');
const aviso = document.querySelector('#mensaje-error');

function revisarFormulario(event) {
    event.preventDefault();

    const nombre = document.querySelector('#nombre').value;
    const mensaje = document.querySelector('#mensaje').value;
    const correo = document.querySelector('#email').value;

    if (nombre === '' || mensaje === '') {
        aviso.textContent = 'Por favor completa todos los campos';
        aviso.classList.add('error');
        aviso.classList.remove('exito');
    } else if (correo.includes('@')=== false) {
        aviso.textContent = 'Por favor ingresa un correo válido';
        aviso.classList.add('error');
        aviso.classList.remove('exito');
    } else {
        aviso.textContent = 'Formulario enviado con exito';
        aviso.classList.add('exito');
        aviso.classList.remove('error');
    }
}

botonform.addEventListener('submit', revisarFormulario);