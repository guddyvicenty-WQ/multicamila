const form = document.querySelector("#form-cita");
const aviso = document.querySelector("#aviso-cita");

function validarFormulario(event) {
    const nombre = document.querySelector("#nombre").value.trim();
    const correo = document.querySelector("#correo").value.trim();
    
    aviso.classList.remove("error", "exito");
    if (nombre === "" || correo === "") {
        event.preventDefault();
        aviso.textContent = "completa tu nombre y tu correo para reservar la cita.";
        aviso.classList.add("error");
    }
    else if (!correo.includes("@")) {
        event.preventDefault();
        aviso.textContent = "Ese correo esta mal escrito: le falta el arroba.";
        aviso.classList.add("error");
    }
    else {
        aviso.textContent = "cita reservada - te atiende Steven.";
        aviso.classList.add("exito");
    }
}

form.addEventListener("submit", validarFormulario);