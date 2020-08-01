@extends('layouts.blog')

@section('title', $post->title)

@section('social-tags')
	@include('partials.blog.social-tags')
@stop

@section('content')
<article>
	<div class="container mx-auto px-5 lg:max-w-screen">
		<h2 class="text-gray-900 text-2xl font-bold hover:underline">
			<a href="{{ route('blog.post', [$post->publish_date->format('Y'), $post->publish_date->format('m'), $post->slug]) }}">{{ $post->title }}</a>
		</h2>
		<p class="text-gray-600 text-sm">
			פורסם ב־{{ $post->publish_date->format('d/m/Y') }}
		</p>
	</div>

	<div class="container mx-auto px-5 lg:max-w-screen">
		<figure>
			<img src="{{ $post->featured_image }}" alt="">
		</figure>
	</div>

	<div class="container mx-auto px-20 lg:max-w-screen mt-10 text-lg">
		<div class="post_content text-base leading-loose">
			{!! $post->body !!}
		</div>
	</div>

	<div class="container mx-auto px-5 lg:max-w-screen text-lg">
		<div class="mt-10 py-2 flex items-center border-t border-b border-gray-400">
			<div class="w-32">
				<img src="{{ $post->author->avatar }}" class="rounded-full">
			</div>
			<div class="pr-5 leading-loose">
				נכתב על־ידי <span class="font-bold">{{ $post->author->name }}</span>
				<div class="text-base">
					<p>{!! $post->author->bio !!}</p>
				</div>
			</div>
		</div>
	</div>

	{{-- <div class="w-3/4 pl-5"> --}}

		{{-- <p>
			תגיות:
			@foreach ($post->tags as $tag)
				<a href="{{ route('blog.tag', [$tag->slug]) }}">{{ $tag->name }}</a>
			@endforeach
		</p> --}}

		{{-- <p class="text-gray-800">
			{{ $post->excerpt }}
		</p> --}}
	{{-- </div> --}}
</article>
@stop
