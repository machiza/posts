@extends('layouts.admin')
	@section('content')
	{!!Form::open()!!}
		<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
			<strong> Topico Adicionado com Correctamente</strong>
		</div>

		<div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
			<strong id="msj"></strong>
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token()}}" id="token">
		@include('topico.form.topico')
		{!!link_to('#', $title='Registar', $attributes = ['id'=>'registo', 'class'=>'btn btn-primary'], $secure = null)!!}
	{!!Form::close()!!}
	@endsection

	@section('scripts')
		{!!Html::script('js/script.js')!!}
	@endsection 