var btnAbrirPopup = document.getElementById('btn-abrir-modal'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function () 
{
	overlay.classList.add('active');
	popup.classList.add('active');
});
btnCerrarPopup.addEventListener('click', function (e) 
{
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});
//-----------------pop-up visitante------------------//
var btnAbrirPopup = document.getElementById('btn-abrir-modal2'),
	overlay = document.getElementById('overlay2'),
	popup = document.getElementById('popup2'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup2');

btnAbrirPopup.addEventListener('click', function () 
{
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function (e) 
{
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});

//pagina de inicio, registro de nuevos vigilantes y listya de vigilantes.
var btnRE = document.getElementById('List-V'),
btnrv =document.getElementById('btnRV'),
bienvenida =document.getElementById('welcome'),
listadoV = document.getElementById('list-vigilante'),
formularioV =document.getElementById('FormR');
hora = document.getElementById('hora'),

/*btnRE.addEventListener('click', function()
{
	listadoV.classList.add('active');
	formularioV.classList.remove('active');
	bienvenida.classList.add('active');
	hora.classList.add('active')
	btnRE.classList.add('active');
	entrada_salida.classList.remove('active');
});

btnrv.addEventListener('click', function(e)
{
	e.preventDefault();
	listadoV.classList.remove('active');
	formularioV.classList.add('active');
	btnRE.classList.remove('active');
});
function retro()
{
	bienvenida.classList.remove('active');
	formularioV.classList.remove('active');
	listadoV.classList.remove('active');
	hora.classList.remove('active');
	btnRE.classList.remove('active');
	entrada_salida.classList.remove('active');
}
var btnES = document.getElementById('ES'),
	entrada_salida = document.getElementById('es');
	btnES.addEventListener('click', function(){
	entrada_salida.classList.add('active');
	bienvenida.classList.add('active');
	hora.classList.add('active')
});*/
//habilitando campos para editar
function activar()
{
	document.getElementById('cedula').disabled = false;
	document.getElementById('contac').disabled = false;
	document.getElementById('direc').disabled = false;
	document.getElementById('user-n').disabled = false;
	document.getElementById('edit').classList.add('active');
	document.getElementById('btnRE').classList.add('active');
	document.getElementById('btnRNE').classList.add('active');
}
function desactivar()
{
	document.getElementById('cedula').disabled = true;
	document.getElementById('contac').disabled = true;
	document.getElementById('direc').disabled = true;
	document.getElementById('user-n').disabled = true;
	document.getElementById('btnRE').classList.remove('active');
	document.getElementById('btnRNE').classList.remove('active');
	document.getElementById('edit').classList.remove('active');
}

//---------------------------------------------------------------------------------------------------------------------------//
