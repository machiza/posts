$(document).ready(function() {
	Carregar();
});

function Carregar() {
	var tabelaDados = $("#dados");
	var comment = $("comment");
	var route = "/topicos";

	$("#dados").empty();
	$.get(route, function(res) {
		$(res).each(function(key,value){
			tabelaDados.append("<h1>"+value.topico+"</h1>");
		});
	}); 
}

