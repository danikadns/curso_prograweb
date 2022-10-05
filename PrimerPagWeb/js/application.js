function mostraralerta(){
    alert('se hizo clic en el titulo desde una funcion');

}
function mostrarMensaje(){
    alert("Hizo click");
}
function mostrarComentario(){
    alert("No te olvides de dejar tu comentario");
}
function mostrarComentaOut(){
    alert("Deja tu comentario");
}

function hacerClick(){
    var elemento = document.getElementById('parrafoConClick');
    elemento.addEventListener('click', mostrarMensaje, false);
}

window.addEventListener('load', hacerClick, false);

function comentario(){
    var comenta = document.getElementById('coment');
    comenta.addEventListener('mouseover', mostrarComentario, false);
    comenta.addEventListener('mouseout', mostrarComentaOut, false);
}

window.addEventListener('load', comentario, false);