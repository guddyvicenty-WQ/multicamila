const botonConfirmar = document.querySelector('#btn-confirmar');
const mensajeEncargo = document.querySelector('#mensaje-encargo');

function mostrarMensaje() {
    mensajeEncargo.textContent = "Encargo recibido - te atiende guddy steven vincenty echegaray";

    mensajeEncargo.classList.remove('oculto');
}

botonConfirmar.addEventListener('click', mostrarMensaje);