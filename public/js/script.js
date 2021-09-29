var menu_btn = document.querySelector("#menu-btn");

var sidebar = document.querySelector("#sidebar");

var container = document.querySelector(".my-container");

var brand = document.querySelector("#brand");

menu_btn.addEventListener("click", () => {
   sidebar.classList.toggle("active-nav");
   container.classList.toggle("active-cont");
   brand.classList.toggle("mover-brand");
   moveContent();
});


function moveContent(){

   sidebar.querySelectorAll('.nav-item').forEach(elemt => elemt.classList.toggle("mover-items"));
   sidebar.querySelectorAll('.text-hidden').forEach(elemt => elemt.classList.toggle("hidden"));
}


// Selección dashboard
const colorEnlace = document.querySelectorAll('.list');

function colorLink(){
   if(colorEnlace){
      // por cada <I> activa o desactiva la clase link_active
      colorEnlace.forEach(a=> a.classList.remove('activar'))
      this.classList.add('activar');
   }

}
colorEnlace.forEach(a => a.addEventListener('click', colorLink));


// Para desocultar contraseña
function showPass() {
  var checker = document.getElementById("contraseña");
  if (checker.type === "password") {
    checker.type = "text";
  } else {
    checker.type = "password";
  }
}