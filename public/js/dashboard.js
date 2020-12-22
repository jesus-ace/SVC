var btnabrir = document.getElementById('abrir'),
    brrLateral = document.getElementById('br-lateral'),
	btnolcultar = document.getElementById('ocultar'),
    dashboard = document.getElementById('dashboard');
    upbars= document.getElementById('head');
    
   

btnabrir.addEventListener("click", function(){
     brrLateral.classList.add('active');
      
    btnabrir.classList.add('hover');
    btnolcultar.classList.add('active');
       
        
});
function ocultar(){
    btnabrir.classList.remove('hover');
    brrLateral.classList.remove('active');
}
    
