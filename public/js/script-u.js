var btnpi2 = document.getElementById('pi2'),
    information = document.getElementById('information')
    acciones = document.getElementById('acciones');

btnpi2.addEventListener("click", function() {
    information.classList.add('active');
    acciones.classList.add('active');
    cambiocontra.classList.remove('active');
    btnpi2.classList.add('hover');
    btnpi1.classList.remove('hover');
    btnpi3.classList.remove('hover');
});

var btnpi3 = document.getElementById('pi3'),
    cambiocontra = document.getElementById('cambiocontra');

btnpi3.addEventListener("click", function(){
    btnpi3.classList.add('hover');
    information.classList.add('active');
    acciones.classList.remove('active');
    cambiocontra.classList.add('active');
    btnpi1.classList.remove('hover');
    btnpi2.classList.remove('hover');
});

var btnpi1 = document.getElementById('pi1');
   
btnpi1.addEventListener('click', function (){
    btnpi1.classList.add('hover');
    information.classList.remove('active');
    acciones.classList.remove('active');
    cambiocontra.classList.remove('active');
    btnpi2.classList.remove('hover');
    btnpi3.classList.remove('hover');
});