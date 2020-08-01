@extends ('layouts.blog')

@section ('content')
	<div class="container mx-auto px-5 lg:max-w-screen">
		@foreach ($posts as $post)
			@if ($loop->first)
				@include ('partials.blog.article-big', [$post])
			@else
				@include ('partials.blog.article', [$post])
			@endif
		@endforeach
	</div>
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
