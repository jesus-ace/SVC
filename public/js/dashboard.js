var btnabrir = document.getElementById('abrir'),
    brrLateral = document.getElementById('br-lateral'),
	btnolcultar = document.getElementById('ocultar'),
    dashboard = document.getElementById('dashboard'),
    upbars= document.getElementById('head');
    statistics = document.getElementById('statistics'),
    byarea = document.getElementById('by-area'),
    bydays = document.getElementById('by-days'),
    fieldsetG = document.getElementById('fieldsetG'),
    bymonth = document.getElementById('by-month'),
   

    btnabrir.addEventListener("click", function(){
        brrLateral.classList.add('active');
        upbars.classList.add('active');
        dashboard.classList.add('active');
        btnabrir.classList.add('hover');
        btnolcultar.classList.add('active');
        statistics.classList.add('active');
        fieldsetG.classList.add('active');
        byarea.classList.add('active');
        
    });
    /*Modulo de dashboard*/
    btnabrir.addEventListener("click", function(){
        btnabrir.classList.add('hover');
        brrLateral.classList.add('active');
        dashboard.classList.add('active');
        statistics.classList.add('active');
        fieldsetG.classList.add('active');
    });
    function ocultar(){
        btnabrir.classList.remove('hover');
        brrLateral.classList.remove('active');
        dashboard.classList.remove('active');
        statistics.classList.remove('active');
        fieldsetG.classList.remove('active');
    }

    /*Modulo Perfil de usuario*/
    btnabrir.addEventListener("click", function(){
        btnabrir.classList.add('hover');
        brrLateral.classList.add('active');
        upbars.classList.add('active');
    
    });
    function ocultar(){
        btnabrir.classList.remove('hover');
        brrLateral.classList.remove('active');
        upbars.classList.remove('active');
    }
    /*Modulo lista de Vigilantes*/

    /*function ocultar(){
        //statistics.classList.remove('active');
        btnabrir.classList.remove('hover');
        brrLateral.classList.remove('active');
        btnabrir.classList.remove('active');
        btnolcultar.classList.remove('active');
        dashboard.classList.remove('active');
        upbars.classList.remove('active');
        fieldsetG.classList.remove('active');
        byarea.classList.remove('active');
        btnabrir.classList.remove('hover');
    }*/

//----------------------------------------------Perfil se usuario------------------------------------------------------------------------------//

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
        body.classList.remove('active');
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
        body.classList.remove('active');
    });
 var btnpi1 = document.getElementById('pi1');
    btnpi1.addEventListener('click', function (){
        btnpi1.classList.add('hover');
        information.classList.remove('active');
        acciones.classList.remove('active');
        cambiocontra.classList.remove('active');
        btnpi2.classList.remove('hover');
        btnpi3.classList.remove('hover');
        body.classList.remove('active');
    });

/*------------------------------------------------botones de registro----------------------------------------------------*/    
var btnRE = document.getElementById('RE'),
    mostrar = document.getElementById('oculto'),
    btnocultar = document.getElementById('oculto2');

    btnRE.addEventListener('click', function(){
  	  mostrar.classList.add('active');
	    btnocultar.classList.add('active');
	    btnRE.classList.add('active');
    })

    btnocultar.addEventListener('click', function(e){
	    e.preventDefault();
	    mostrar.classList.remove('active');
	    btnocultar.classList.remove('active');
	    btnRE.classList.remove('active');
    });

function eliminar(){
    var FormEditar= document.getElementById('formeditar');
        FormEliminar= document.getElementById('formeliminar');
        btnaceptar = document.getElementById('btnRA');

        FormEditar.classList.add('active');
        FormEliminar.classList.add('active');
        btnaceptar.classList.add('active');
}