var usuario = document.getElementById("usuario");

//Comprobación nombre de usuario
usuario.addEventListener("keyup", comprobarNombre);
validarUsuario = /^([A-Z]|[a-z]){4,8}$/;
function comprobarNombre(ev) {
    let comprobacionNombreCorrecta = validarUsuario.test(usuario.value);
    if (comprobacionNombreCorrecta) {
        usuario.style.border="1px solid green";
    } else {
        usuario.classList.remove("correcto");
        usuario.style.border="1px solid red";
    }
}

