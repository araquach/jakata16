@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Keep up to date with the latest PK blog posts',
	'keywords' => 'Paul Kemp Hairdressing news, PK news stories, blog, blogs',
	'ogtitle' => 'Blog Posts',
	'ogdescription' => 'All the latest PK news and stories in our blog',
	'ogimage' => '',
	'title' => 'Paul Kemp Hairdressing - PK News - Hairdressers in Warrington'
	])
@stop

@section('content')

<section id="blog">
    
    @foreach($blogs as $blog)
        <article>
            <div class="blog-pic">
                <img src="{{ $blog->pics()->firstOrFail()->image_url }}" alt="{{ $blog->pics()->first()->alt }}">
            </div>
            <div class="blog-copy">
                <h2>{{ $blog->title }}</h2>
                
                <p>{{ $blog->paras()->first()->para }}</p>
                <p><a href="{{ URL::to('blog') }}/{{ $blog->slug }}">Read more &gt;</a></p>
                <p class="author">Published by {{ $blog->author }}</p>
                <time datetime="{{-- $blog->created_at --}}">{{ $blog->created_at->format('d/m/Y') }}</time>
            </div>
        </article>
    @endforeach
    
</section>

@stop