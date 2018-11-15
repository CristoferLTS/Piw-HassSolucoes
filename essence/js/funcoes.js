
function contCart(){
	if (typeof(Storage) !== "undefined") {
		if(sessionStorage.clickcount){
			sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
		} else{
			sessionStorage.clickcount = 1;
		}
		document.getElementById('result').innerHTML = sessionStorage.clickcount;
	} else{
		document.getElementById('result').innerHTML = "";
	}
}

window.onbeforeunload = function() {
        sessionStorage.clickcount = 0;
}

function alerta(){
	alert("Desculpe! Nossa Loja Ainda não está Pronta :(");
}