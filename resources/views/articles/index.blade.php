@extends('app')

@section('content')
    <h1>Articles</h1>


    {!! link_to_route('articles.create', 'Create', array(), array('class' => 'btn-default')) !!}
    @foreach ($articles as $article)
        <article>
            <h2>
                <a href="{{ url('/articles', $article->id) }}"> {{ $article->title }}</h2> </a>
                <div class="body">{{ $article->body }}</div>
                {!! link_to_route('articles.edit', 'Edit', array($article->id), array('class' => 'btn btn-info')) !!}
                {!! link_to_route('articles.delete', 'Delete', array($article->id), array('class' => 'btn btn-danger')) !!}


        </article>
    @endforeach
@stop
