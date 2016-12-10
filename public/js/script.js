$("#registo").click(function(){
	var dado = $("#topico").val();
	var route = "http://localhost:8000/topico";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{topico: dado},

		success:function() {
			$("#msj-success").fadeIn();
		},
		error:function(msj) {
			$("#msj").html(msj.responseJSON.topico);
			$("#msj-error").fadeIn();
		}
	}); 
}); 