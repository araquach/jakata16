@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => 'Keep up to date with the latest Jakata blog posts',
	'keywords' => 'Jakata Salon news, Jakata news stories, blog, blogs',
	'ogtitle' => 'Blog Posts',
	'ogdescription' => 'All the latest Jakata news and stories in our blog',
	'ogimage' => '',
	'title' => 'Jakata Salon - Jakata Blog - Hairdressers in Warrington'
	])
@stop

@section('content')

<section id="blog">
    
    @foreach($blogs as $blog)
        <article>
            <h2>{{ $blog->title }}</h2>
            <div class="blog-pic">
                <img src="{{ $blog->paras()->first()->para_pic }}" alt="{{ $blog->paras()->first()->para_pic_alt }}">
            </div>
            
                <p>{{ $blog->paras()->first()->para }}</p>
                <p><a href="{{ URL::to('blog') }}/{{ $blog->slug }}" class="back-and-to">Read more &gt;</a></p>
                <p class="author">Published by {{ $blog->author }}</p>
                <time datetime="{{-- $blog->created_at --}}">{{ $blog->created_at->format('d/m/Y') }}</time>
        
        </article>
    @endforeach
    
</section>

@stop