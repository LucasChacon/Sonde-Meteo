var xhr = new XMLHttpRequest();
var Arduino = 'http://sonde.freeboxos.fr:49152/';
var Hum = document.getElementById("Hum");
var lum = document.getElementById("lum");
var Temp = document.getElementById("Temp");
var IdxC = document.getElementById("IdxC");

xhr.open("GET", Arduino, true);

xhr.onload = function(){ 
console.log(this.responseText); 
 	if (this.readyState == 4 && this.status == 200){
		
		var data = this.response;
		
		for(var i = 1; i < 6; i++){ 
		Hum.innerHTML += data[data.indexOf('H')+i]
		}
		
		for(var j = 1; j < 6; j++){
		Temp.innerHTML += data[data.indexOf('T')+j]
		}
		
		for(var k = 1; k < 6; k++){
		lum.innerHTML += data[data.indexOf('L')+k]
		}
		
		for(var l = 1; l < 6; l++){
		IdxC.innerHTML += data[data.indexOf('I')+l]
		
		}		
	}
} 


xhr.send();









