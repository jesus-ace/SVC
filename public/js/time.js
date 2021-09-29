// Tiempo
function showTime() {

   var time = new Date().toLocaleTimeString();
   var timeInt = parseInt(time);
   if (timeInt > 12){
      document.getElementById('time').innerHTML= time;
   }
   else if (timeInt < 12){
      document.getElementById('time').innerHTML= time;
   }

   else if (timeInt == 3){
      alert("Son las 3");
   }

}
showTime();
setInterval(showTime, 1000);