@extends('layouts.blog')

{{-- @section('title', $page->title) --}}

@section('content')
<article>
	<div class="container mx-auto px-5 lg:max-w-screen">
		<h2 class="text-gray-900 text-2xl font-bold hover:underline">
			<a href="{{ route('blog.page', [$page->slug]) }}">{{ $page->title }}</a>
		</h2>
	</div>

	<div class="container mx-auto px-5 lg:max-w-screen">
		<figure>
			<img src="{{ $page->featured_image }}" alt="">
		</figure>
	</div>

	<div class="container mx-auto px-20 lg:max-w-screen mt-10 text-lg">
		<div class="page_content text-base leading-loose">
			{!! $page->body !!}
		</div>
	</div>
</article>
@stop
