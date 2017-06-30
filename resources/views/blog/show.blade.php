@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => addslashes($blog->paras()->first()),
	'keywords' => 'Jakata Salon news, Jakata news stories',
	'ogtitle' => addslashes($blog->title),
	'ogdescription' => addslashes($blog->paras->first()->para),
	'ogimage' => $blog->meta_image,
	'title' => 'Jakata Salon -' . addslashes($blog->title) . '- Hairdressers in Warrington'
	])
@stop

@section('content')

<section id="blog">

    <article>
        <h2>{{ $blog->title }}</h2>
        
        @foreach($blog->paras as $para)
            <div class="blog-pic">
                <img src="{{ $para->para_pic }}" alt="{{ $para->para_pic_alt }}">
            </div>
        
            <p>{{ $para->para }}</p>
            
        @endforeach
        <p><a href="{{ URL::to('blog') }}">Back to all the blogs &gt;</a></p>
        <p class="author">Published by {{ $blog->author }}</p>
        <time datetime="{{ $blog->created_at }}">{{ $blog->created_at->format('d/m/Y') }}</time>
    </article>

</section>

@stop