var btnabrir = document.getElementById('abrir'),
	btnolcultar = document.getElementById('ocultar'),
	brrLateral = document.getElementById('br-lateral'),
    statistics = document.getElementById('statistics'),
    dashboard = document.getElementById('dashboard'),
    byarea = document.getElementById('by-area'),
    bydays = document.getElementById('by-days'),
    fieldsetG = document.getElementById('fieldsetG'),
    bymonth = document.getElementById('by-month'),
    upbars= document.getElementById('head');

    btnabrir.addEventListener("click", function(){
        btnabrir.classList.add('hover');
        brrLateral.classList.add('active');
        btnolcultar.classList.add('active');
        statistics.classList.add('active');
        dashboard.classList.add('active');
        fieldsetG.classList.add('active');
        byarea.classList.add('active');
        upbars.classList.add('active');
    });
    function ocultar(){
        //statistics.classList.remove('active');
        btnabrir.classList.remove('hover');
        brrLateral.classList.remove('active');
        btnabrir.classList.remove('active');
        btnolcultar.classList.remove('active');
        dashboard.classList.remove('active');
        fieldsetG.classList.remove('active');
        byarea.classList.remove('active');
        upbars.classList.remove('active');
        btnabrir.classList.remove('hover');
    }
//---------------------------------------------------Ventanas--------------------------------------------------------------------------------//
var btnuser = document.getElementById('btnuser'),
    user = document.getElementById('user');
    
btnuser.addEventListener("click", function (){
    dashboard.classList.remove('active1');
    body.classList.remove('active');
    user.classList.add('active');
    newuser.classList.remove('active');
    welcome.classList.add('active');
    tablaVigilante.classList.remove('active');
    auditar.classList.remove('active');
    registrovisitante.classList.remove('active');
    seereports.classList.remove('active');
    permits.classList.remove('active');
    createrepote.classList.remove('active');
    listvisitors.classList.remove('active');
    area.classList.remove('active');
});

var buttonDashboard = document.getElementById('btn-dashboard'),
    body= document.getElementById('body');
    welcome = document.getElementById('welcome');

    buttonDashboard.addEventListener("click", function() {
        dashboard.classList.add('active1');
        body.classList.add('active');
        user.classList.remove('active');
        newuser.classList.remove('active');
        welcome.classList.add('active')
        tablaVigilante.classList.remove('active');
        listvisitors.classList.remove('active');
        auditar.classList.remove('active');
        createrepote.classList.remove('active');
        registrovisitante.classList.remove('active');
        seereports.classList.remove('active');
        permits.classList.remove('active');
        area.classList.remove('active');
    });

var newuser = document.getElementById('FormR');

     function newUser() {
        dashboard.classList.remove('active1');
        body.classList.remove('active');
        newuser.classList.add('active');
        user.classList.remove('active');
        welcome.classList.add('active');
        tablaVigilante.classList.remove('active');
        listvisitors.classList.remove('active');
        registrovisitante.classList.remove('active');
        auditar.classList.remove('active');
        createrepote.classList.remove('active');
        seereports.classList.remove('active');
        registrovisitante.classList.remove('active');
        permits.classList.remove('active');
        area.classList.remove('active');
    }
var listVigilant = document.getElementById('list-vigilant'),
    tablaVigilante =document.getElementById('list-vigilante');

    listVigilant.addEventListener('click', function(){
        tablaVigilante.classList.add('active');
        body.classList.remove('active');
        newuser.classList.remove('active');
        user.classList.remove('active');
        welcome.classList.add('active');
        dashboard.classList.remove('active1');
        listvisitors.classList.remove('active');
        registrovisitante.classList.remove('active');
        auditar.classList.remove('active');
        createrepote.classList.remove('active');
        seereports.classList.remove('active');
        permits.classList.remove('active');
        area.classList.remove('active');
    });

var btnlistvisitors = document.getElementById('list-visitors'),
    listvisitors = document.getElementById('listVistors');

    btnlistvisitors.addEventListener( 'click', function () {
        listvisitors.classList.add('active');
        body.classList.remove('active');
        welcome.classList.add('active');
        tablaVigilante.classList.remove('active');
        newuser.classList.remove('active');
        user.classList.remove('active');
        dashboard.classList.remove('active1');
        registrovisitante.classList.remove('active');
        auditar.classList.remove('active');
        createrepote.classList.remove('active');
        seereports.classList.remove('active');
        permits.classList.remove('active');
        area.classList.remove('active');
    });

var btnregistrovisitante = document.getElementById('visitantte'),
    registrovisitante = document.getElementById('registro-visitor'); 

    function regisvisitante(){
        registrovisitante.classList.add('active');
        body.classList.remove('active');
        welcome.classList.add('active');
        tablaVigilante.classList.remove('active');
        newuser.classList.remove('active');
        user.classList.remove('active');
        dashboard.classList.remove('active1');
        listvisitors.classList.remove('active');
        auditar.classList.remove('active');
        createrepote.classList.remove('active');
        seereports.classList.remove('active');
        permits.classList.remove('active');
        area.classList.remove('active');
    };

var btnauditar = document.getElementById('audi'),
    auditar= document.getElementById('auditar');

    btnauditar.addEventListener('click', function() {
        auditar.classList.add('active');
        body.classList.remove('active');
        welcome.classList.add('active');
        tablaVigilante.classList.remove('active');
        newuser.classList.remove('active');
        user.classList.remove('active');
        dashboard.classList.remove('active1');
        listvisitors.classList.remove('active');
        registrovisitante.classList.remove('active');
        createrepote.classList.remove('active');
        seereports.classList.remove('active');
        permits.classList.remove('active');
        area.classList.remove('active');
    });

var btnreporte = document.getElementById('reporte'),
    createrepote = document.getElementById('Text');

    btnreporte.addEventListener('click', function() {
        createrepote.classList.add('active');
        body.classList.remove('active');
        auditar.classList.remove('active');
        welcome.classList.add('active');
        tablaVigilante.classList.remove('active');
        newuser.classList.remove('active');
        user.classList.remove('active');
        dashboard.classList.remove('active1');
        listvisitors.classList.remove('active');
        registrovisitante.classList.remove('active');
        seereports.classList.remove('active');
        permits.classList.remove('active');
        area.classList.remove('active');
    });
var btnseereports = document.getElementById('see-reports'),
    seereports = document.getElementById('reports');

    btnseereports.addEventListener('click', function() {
        seereports.classList.add('active');
        body.classList.remove('active');
        createrepote.classList.remove('active');
        auditar.classList.remove('active');
        welcome.classList.add('active');
        tablaVigilante.classList.remove('active');
        newuser.classList.remove('active');
        user.classList.remove('active');
        dashboard.classList.remove('active1');
        listvisitors.classList.remove('active');
        registrovisitante.classList.remove('active');
        permits.classList.remove('active');
        area.classList.remove('active');
    });
var btnroles = document.getElementById('roles'),
    permits = document.getElementById('permits');

    btnroles.addEventListener('click', function() {
        permits.classList.add('active');
        seereports.classList.remove('active');
        body.classList.remove('active');
        createrepote.classList.remove('active');
        auditar.classList.remove('active');
        welcome.classList.add('active');
        tablaVigilante.classList.remove('active');
        newuser.classList.remove('active');
        user.classList.remove('active');
        dashboard.classList.remove('active1');
        listvisitors.classList.remove('active');
        registrovisitante.classList.remove('active');
        area.classList.remove('active');
    });
    var btnxarea = document.getElementById('xareas'),
        area = document.getElementById('area');

    btnxarea.addEventListener('click', function() {
        area.classList.add('active');
        permits.classList.remove('active');
        seereports.classList.remove('active');
        body.classList.remove('active');
        createrepote.classList.remove('active');
        auditar.classList.remove('active');
        welcome.classList.add('active');
        tablaVigilante.classList.remove('active');
        newuser.classList.remove('active');
        user.classList.remove('active');
        dashboard.classList.remove('active1');
        listvisitors.classList.remove('active');
        registrovisitante.classList.remove('active');
    });
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