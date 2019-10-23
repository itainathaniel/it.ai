@extends ('layouts.blog')

@section ('content')
	@foreach ($posts as $post)
	<article>
		<header>
			<img class="h-18" src="{{ $post->featured_image }}" alt="Featured image">
			<h2>{{ $post->title }}</h2>
			<p>
				{{ $post->created_at->format('d/m/Y') }}
				@foreach ($post->tags as $tag)
					<a href="/blog/tag/{{ $tag->slug }}">{{ $tag->name }}</a>
				@endforeach
			</p>
		</header>
		<p>{{ $post->excerpt }}</p>
	</article>
	@endforeach
@stop
@section ('content_big')
	@foreach ($posts as $post)
		<div class="relative mb-5">
			{{-- <div class="h-64 bg-no-repeat bg-cover bg-center" style="background-image:url('{{ $post->featured_image }}')"></div> --}}
			<div class="relative mx-10 p-10 bg-gray-100 rounded" {{-- style="top:-8rem;" --}}>
				@if ($post->featured_image_caption)
					<p class="text-xs underline text-left">
						{!! $post->featured_image_caption !!}
					</p>
				@endif
				<h1 class="font-black text-4xl mb-8">
					<a href="/blog/{{ $post->id }}/{{ $post->slug }}">
						{{ $post->title }}
					</a>
				</h1>
				<div class="mb-8">
					{{-- {!! $post->body !!} --}}
					{!! $post->excerpt !!}
				</div>
				@if ($post->tags)
					<ul>
						<li class="inline">תגיות:</li>
						@foreach ($post->tags as $tag)
							<li class="inline">
								<a href="/blog/tag/{{ $tag->slug }}">{{ $tag->name }}</a>
							</li>
						@endforeach
					</ul>
				@endif
				<div>{{ $post->author }}</div>
			</div>
			<div>{{ $post }}</div>
		</div>
	@endforeach
@stop
