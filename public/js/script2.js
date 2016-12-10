$(document).ready(function() {
	Carregar();
});

function Carregar() {
	var tabelaDados = $("#dados");
	var route = "/topicos";

	$("#dados").empty();
	$.get(route, function(res) {
		$(res).each(function(key,value){
			tabelaDados.append("<tr><td>"+value.topico+"</td><td><button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal' data-target='#myModal'>Editar</button><button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
		});
	});
}

function Eliminar(btn) {
	var route = "/topico/"+btn.value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'DELETE',
		dataType: 'json',
		success: function() {
			Carregar();
			$("#msj-success").fadeIn();
		}
	});

}

function Mostrar(btn) {
	var route = "/topico/"+btn.value+"/edit";

	$.get(route, function(res) {
		$("#topico").val(res.topico);
		$("#id").val(res.id);
	});
}

$("#actualizar").click(function() {
	var value = $("#id").val();
	var dado = $("#topico").val();
	var route = "/topico/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		dataType: 'json',
		data: {topico: dado},
		success: function() {
			Carregar();
			$("#myModal").modal('toggle');
			$("#msj-success").fadeIn();
		}
	});
});