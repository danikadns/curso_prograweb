

function presionar(){
    if(!video.paused && !video.ended){
        video.pause();
        document.querySelector(".fa-play").style.display = "block";
        document.querySelector(".fa-pause").style.display = "none";

        window.clearInterval(bucle);

    }else{
        video.play();
        document.querySelector(".fa-play").style.display = "none";
        document.querySelector(".fa-pause").style.display = "block";
        bucle = setInterval(estado, 1000);
    }
}

function estado() {
    if(!video.ended){
        var total = parseInt(video.currentTime * maximo / video.duration);
        progreso.style.width = total + 'px';
        var tti = parseInt(video.currentTime);
        ttiempos.innerHTML = tti;
        
    }else{
        progreso.style.width = '0px';
        document.querySelector(".fa-play").style.display = "block";
        document.querySelector(".fa-pause").style.display = "none";
        window.clearInterval(bucle);
    }
}


function iniciar(){
    maximo = 600;
    video = document.getElementById('medio');
    reproducir = document.getElementById('reproducir');
    barra = document.getElementById('barra');
    progreso = document.getElementById('progreso');
    retroceder = document.getElementById('retroceder');
    avanzar = document.getElementById('adelantar');
    expandirPantalla = document.getElementById("fullscreen");
    tiempott = document.getElementById("ttiempos");


    reproducir.addEventListener('click', presionar, false);
    barra.addEventListener('click', mover, false);
    retroceder.addEventListener('click', rewind, false);
    avanzar.addEventListener('click', forward, false);
    expandirPantalla.addEventListener('click', expandir, false);

    

}

function rewind(){
    video.currentTime = video.currentTime - ((video.duration/100)*5);
}

function forward(){
    video.currentTime = video.currentTime + ((video.duration/100)*5);
}

function expandir(e){
    e.preventDefault();
    video.requestFullscreen();

}


function hora(segundos){
    var d=new Date(segundos*1000); 
    // Ajuste de las 23 horas
    var hora = (d.getHours()==0)?23:d.getHours()-1;
    var hora = (hora<9)?"0"+hora:hora;
    var minuto = (d.getMinutes()<9)?"0"+d.getMinutes():d.getMinutes();
    var segundo = (d.getSeconds()<9)?"0"+d.getSeconds():d.getSeconds();
    return hora+":"+minuto+":"+segundo;	 
   }


function mover(e){
    if(!video.paused && !video.ended){
        var ratonX = e.pageX - barra.offsetLeft;
        var nuevoTiempo = ratonX * video.duration / maximo;
        video.currentTime = nuevoTiempo;
        progreso.style.width = ratonX + 'px';
    }
}

window.addEventListener('load', iniciar, false);