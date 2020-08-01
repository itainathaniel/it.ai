<article class="flex mb-10 last:m-0">
	<div class="w-3/4 pl-5">
		<h2 class="text-gray-900 text-2xl font-bold hover:underline">
			<a href="{{ route('blog.post', [$post->publish_date->format('Y'), $post->publish_date->format('m'), $post->slug]) }}">{{ $post->title }}</a>
		</h2>

		{{-- <p>
			תגיות:
			@foreach ($post->tags as $tag)
				<a href="{{ route('blog.tag', [$tag->slug]) }}">{{ $tag->name }}</a>
			@endforeach
		</p> --}}

		<p class="text-gray-800">
			{{ $post->excerpt }}
		</p>

		<p class="text-gray-600 text-sm">
			פורסם ב־{{ $post->publish_date->format('d/m/Y') }}
		</p>
	</div>

	<a
		class="block w-1/4 bg-cover bg-center bg-no-repeat"
		style="background-image: url('{{ $post->featured_image }}')"
		href="{{ route('blog.post', [$post->publish_date->format('Y'), $post->publish_date->format('m'), $post->slug]) }}"
	></a>
</article>
