var usuario = document.getElementById("usuario");
var password = document.getElementById("password");
var repeatPassword = document.getElementById("repeatPassword");
var descripcion = document.getElementById("descripcion");
var botonEnviar = document.getElementById("registro");
var captcha = document.getElementById("captcha");
var destinoArrastrable = document.querySelector(".resultado");
var num1 = document.getElementById("num1");
var num2 = document.getElementById("num2");
var formRegistro = document.getElementById("formularioRegistro");

validarUsuario = /^[A-Za-z]{4,8}$/;
validarPassword = /^[A-Za-z]{4,8}$/;
validarDescripcion = /^\w{2,}\s\w{2,}/;

//Comprobación nombre del usuario
usuario.addEventListener("keyup", comprobarNombre);
function comprobarNombre(ev) {
    if (validarUsuario.test(ev.target.value)) {
        ev.target.classList.remove("error");
        ev.target.classList.add("correcto");
    } else {
        ev.target.classList.remove("correcto");
        ev.target.classList.add("error");
    }
}
//Comprobación password del usuario.
password.addEventListener("keyup", comprobarPassword);
repeatPassword.addEventListener("keyup", comprobarPassword);
function comprobarPassword(ev) {
    if (validarPassword.test(ev.target.value)) {
        ev.target.classList.remove("error");
        ev.target.classList.add("correcto");
    } else {
        ev.target.classList.remove("correcto");
        ev.target.classList.add("error");
    }
}
//Comprobación descripción del usuario.
descripcion.addEventListener("keyup", comprobarDescripcion);
function comprobarDescripcion(ev) {
    if (validarDescripcion.test(ev.target.value)) {
        ev.target.classList.remove("error");
        ev.target.classList.add("correcto");
    } else {
        ev.target.classList.remove("correcto");
        ev.target.classList.add("error");
    }
}
//Comprobar Campos
botonEnviar.addEventListener("click", comprobarCampos);
function comprobarCampos(ev) {
    ev.preventDefault();
    let camposCorrectos = true;
    if (document.getElementsByClassName("correcto").length < 3) {
        camposCorrectos = false;
    }
    if (camposCorrectos) {
        mostrarCapcha();
    } else {
        captcha.style.display = "none";
    }
}
//Mostrar Capcha
function mostrarCapcha(ev) {
    captcha.style.display = "block";
    let numero1 = parseInt(Math.random() * 10);
    let numero2 = parseInt(Math.random() * 10);
    let resultadoSuma = numero1 + numero2;
    num1.textContent = numero1;
    num2.textContent = numero2;

    let opcapcha = document.getElementsByClassName("opcaptcha");
    for (const iterator of opcapcha) {
        iterator.setAttribute("draggable", "true");
        let num = parseInt(Math.random() * 19)
        while (num == resultadoSuma) {
            num = parseInt(Math.random() * 19)
        }
        iterator.textContent = num;
        iterator.addEventListener("dragstart", (e) => {
            iterator.style.opacity = 0.5;
            iterator.classList.add("elementoMovido");
        });
        iterator.addEventListener("dragend", (e) => {
            iterator.style.opacity = 1;
            iterator.classList.remove("elementoMovido");
        });
    }
    opcapcha[parseInt(Math.random() * 3)].textContent = resultadoSuma;
    destinoArrastrable.addEventListener("dragenter", (e) => {
        destinoArrastrable.style.background = "yellow";
    });
    destinoArrastrable.addEventListener("dragleave", (e) => {
        destinoArrastrable.style.background = "white";
    });
    destinoArrastrable.addEventListener("dragover", (e) => {
        e.preventDefault();
    });

    destinoArrastrable.addEventListener("drop", (e) => {
        let elementoSeleccionado = document.getElementsByClassName("elementoMovido")[0];
        if (elementoSeleccionado.textContent == resultadoSuma) {
            destinoArrastrable.style.background = "green";
            destinoArrastrable.textContent = "SI";
            setTimeout(() => {
                let parrafoNoRobot = document.getElementById("captcha");
                parrafoNoRobot.textContent = "ENHORABUENA, NO ERES UN ROBOT";
            }, 2000);
            setTimeout(() => {
                formRegistro.submit();
            }, 4000);
        } else {
            destinoArrastrable.style.background = "red";
            destinoArrastrable.textContent = "NO";
        }
    });
}