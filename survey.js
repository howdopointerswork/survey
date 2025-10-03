var script = document.createElement('script');


script.src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js";
script.type = "text/javascript";



script.onload = function(){
	

	$(document).ready(function(){

		console.log("Hello");
	});


};


document.head.appendChild(script);