@extends('layouts.main')

@section('head')

@include('layouts.partials.head', [
	'description' => $blog->paras()->first()->para,
	'keywords' => 'Jakata Salon blog, Jakata news stories',
	'ogtitle' => $blog->title,
	'ogdescription' => $blog->paras->first()->para,
	'ogimage' => $blog->meta_image,
	'title' => 'Jakata Salon -' . $blog->title . '- Hairdressers in Warrington'
	])
@stop

@section('content')

<section id="blog">

    <article>
        <h2>{{ $blog->title }}</h2>
        
        @foreach($blog->paras as $para)
            
            @if($para->para_pic !== NULL)
                <div class="blog-pic">
                    <img src="{{ $para->para_pic }}" alt="{{ $para->para_pic_alt }}">
                </div>
            @endif
            
            {!! addTag($para->para) !!}
            
        @endforeach
        <p><a href="{{ URL::to('blog') }}#{{ $blog->slug }}" class="back-and-to">Back to all the blogs &gt;</a></p>
        <p class="author">Published by {{ $blog->author }}</p>
        <time datetime="{{ $blog->created_at }}">{{ $blog->created_at->format('d F Y') }}</time>
        
        <div id="fb-like">
			<div class="fb-like" data-href="{{ URL::to('blog') }}/{{ $blog->slug }}" data-width="250" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
		</div>
		
    </article>

</section>

@stop