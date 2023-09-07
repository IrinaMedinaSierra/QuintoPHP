window.addEventListener('load',()=> {
    document.querySelector(".formulario").addEventListener('submit', validarFormulario);
});

function validarFormulario(evento) {
    evento.preventDefault();
    var nombre = document.getElementById('nombre');
    if(!nombre.value) {
        // alert('No has escrito nada en el usuario');
        nombre.style.backgroundColor="pink";
        return;
    }
    var email = document.getElementById('email');
    if (!email.value) {
        // alert('La clave no es válida');
        email.style.backgroundColor="pink";
        return;
    }
    this.submit();
}