/* LO QUE DEBE HACER EL BOTÓN (JavaScript, en script.js)
Al hacer click en el botón Confirmar encargo, el párrafo vacío debe mostrar este texto:

Encargo recibido - te atiende [su nombre completo] */
const botonConfirmar = document.querySelector('#btn-confirmar');
const mensajeEncargo = document.querySelector('#encargo');

function mostrarMensaje() {
    mensajeEncargo.textContent = "Encargo recibido - te atiende guddy steven vincenty echegaray";

    mensajeEncargo.classList.remove('oculto');
}

botonConfirmar.addEventListener('click', mostrarMensaje);