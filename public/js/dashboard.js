var btnabrir = document.getElementById('abrir'),
    brrLateral = document.getElementById('br-lateral'),
    dashboard = document.getElementById('dashboard');
    upbars= document.getElementById('head');
    
   

btnabrir.addEventListener("click", function(){
    brrLateral.classList.toggle('active');
    btnabrir.classList.toggle('active');
    /*btnolcultar.classList.add('active');*/
});     
        

