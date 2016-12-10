@extends('layouts.admin')
	@section('content')
	@include('topico.modal')
		<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
			<strong> Topico Actualizado com Sucesso</strong>
		</div>
		<table class="table">
			<thead>
				<th>Topico</th>
				<th>Operações</th>
			</thead>
			<tbody id="dados"></tbody>	
		</table>
	@endsection

	@section('scripts')
		{!!Html::script('js/script2.js')!!}
	@endsection 