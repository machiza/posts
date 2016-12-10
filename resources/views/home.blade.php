@extends('layouts.app')

@section('content')
@include('modal')
        <div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
            <strong> Topico Actualizado com Sucesso</strong>
        </div>
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>

<h1 id="dados"></h1>

@foreach($topicos as $topico)
<?php
    $cont = 0;
?>
<h1 id="dados">{{ $topico->topico }}</h1>
{!!Form::open(['route'=>'comentario.store', 'method'=>'POST'])!!}
        {!! Form::text('conteudo', null, ['class'=>'span6 typeahead','data-provide'=>'typeahead','data-items'=>'4','placeholder'=>'Insira o comentario']) !!}
        {!! Form::hidden('topico_id', $topico->id, ['class'=>'span6 typeahead','type'=>'hidden']) !!}
        {!! Form::hidden('user_id', Auth::user()->id, ['class'=>'span6 typeahead','type'=>'hidden']) !!}
        {!!Form::submit('Comentar',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}
    @foreach($topico->comentarios as $comentario) 
    <?php $cont = $cont + 1; ?>
        <h3 id="comment"><a href="">{{ $comentario->conteudo }}</a></h3>
        

    @endforeach
    <h5>total de comentarios são ({{ $cont }})</h5>
@endforeach
{{-- @foreach($topicos as $topico)
    <h1 id="dados"><a href="">{{ $topico->topico }}</a></h1>
@endforeach --}}
</div>
@endsection

{{-- @section('scripts')
        {!!Html::script('js/script4.js')!!}
    @endsection  --}}
