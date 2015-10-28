
@extends('app')

@section('content')


    {!! Form::model($article, ['method' => 'delete', 'action' =>['ArticlesController@delete', $article->id]]) !!}



    {!! Form::close() !!}

@stop
