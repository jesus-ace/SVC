/*var btnAbrirPopup = document.getElementById('btn-abrir-modal'),
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
});*/
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

//habilitando campos para editar
/*function activar()
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
	document.getElementById('user-n').disabled = true;
	document.getElementById('btnRE').classList.remove('active');
	document.getElementById('btnRNE').classList.remove('active');
	document.getElementById('edit').classList.remove('active');
}*/

/*function formDelete(){
    var 
        btnaceptar = document.getElementById('btnRA'),
        btnEdit = document.getElementById('edit'),
        btnDelete =  

        FormEditar.classList.add('active');
        FormEliminar.classList.add('active');
        btnaceptar.classList.add('active');
        btnesc.classList.add('active');
        btnEdit.classList.add('active');
        btnDelete.classList.add('active');
}*/

/*function volver(){
    FormEditar.classList.remove('active');
        FormEliminar.classList.remove('active');
        btnaceptar.classList.remove('active');
        btnesc.classList.remove('active');
        document.getElementById('btnRE').classList.remove('active');
        document.getElementById('btnRV').classList.add('active');
}*/

//---------------------------------------------------------------------------------------------------------------------------//
