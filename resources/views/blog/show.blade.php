@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => addslashes($blog->paras()->first()),
	'keywords' => 'Paul Kemp Hairdressing news, PK news stories',
	'ogtitle' => addslashes($blog->title),
	'ogdescription' => addslashes($blog->paras->first()->para),
	'ogimage' => $blog->meta_image,
	'title' => 'Paul Kemp Hairdressing -' . addslashes($blog->title) . '- Hairdressers in Warrington'
	])
@stop

@section('content')

<section id="blog">

    <article>
        <div class="blog-pic">
            @foreach($blog->pics as $pic)
                <img src="{{ $pic->image_url }}" alt="{{ $pic->alt }}">
            @endforeach
        </div>
        <div class="blog-copy">
            <h2>{{ $blog->title }}</h2>
            
            @foreach($blog->paras as $para)
            <p>{{ $para->para }}</p>
            @endforeach
            
            <p><a href="{{ URL::to('blog') }}">Back to all the blogs &gt;</a></p>
            <p class="author">Published by {{ $blog->author }}</p>
            <time datetime="{{ $blog->created_at }}">{{ $blog->created_at->format('d/m/Y') }}</time>
        </div>
    </article>

</section>

@stop