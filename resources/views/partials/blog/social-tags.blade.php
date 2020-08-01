<meta name="twitter:card" content="summary">
@isset($post)
<meta name="twitter:title" content="{{ $post->meta['twitter_title'] }}">
<meta name="twitter:description" content="{{ $post->meta['twitter_description'] }}">
<meta name="twitter:image" content="{{ $post->meta['twitter_image'] }}">
@endif
<meta name="twitter:site" content="@itainathaniel">
<meta name="twitter:creator" content="@itainathaniel">

<meta name="og:locale" content="he_IL">
@isset($post)
<meta property="og:url" content="{{ route('blog.post', [$post->publish_date->format('Y'), $post->publish_date->format('m'), $post->slug]) }}">
@endif
<meta property="og:type" content="article">
<meta property="og:site_name" content="הבלוג של איתי נתנאל">
@isset($post)
<meta name="og:type" content="website">
<meta property="og:title" content="{{ $post->meta['opengraph_title'] }}">
<meta property="og:description" content="{{ $post->meta['opengraph_description'] }}">
<meta property="og:image" content="{{ $post->meta['opengraph_image'] }}">
@endif
