@extends('layouts.principal')

@section('content')
<div class="alert alert-primary" role="alert">
  {{ 'Hola '.$nom.' '.$cognom}}
</div>
@if($nom=="Rebeca")
        {{"eres la mejor"}}
    @else
        {{"tienes que mejorar"}}
    @endif

@endsection