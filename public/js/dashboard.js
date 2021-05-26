var btnabrir = document.getElementById('abrir'),
    brrLateral = document.getElementById('br-lateral'),
<<<<<<< HEAD
	btnolcultar = document.getElementById('ocultar'),
=======
>>>>>>> version-developer-1.23
    dashboard = document.getElementById('dashboard');
    upbars= document.getElementById('head');
    
   

btnabrir.addEventListener("click", function(){
<<<<<<< HEAD
     brrLateral.classList.add('active');
      
    btnabrir.classList.add('hover');
    btnolcultar.classList.add('active');
       
        
});
function ocultar(){
    btnabrir.classList.remove('hover');
    brrLateral.classList.remove('active');
}
    
=======
    brrLateral.classList.toggle('active');
    btnabrir.classList.toggle('active');
    /*btnolcultar.classList.add('active');*/
});     
        

>>>>>>> version-developer-1.23
