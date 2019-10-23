<!DOCTYPE html>
<html>
<head>
	<title>Itai Nathaniel's Blog</title>
	<link href="{{ mix('css/blog.css') }}" rel="stylesheet">
</head>
<body class="border-t-4 border-blue-lighter bg-grey-lightest">

<div class="container mx-auto px-4">
	<div id="header">
		<h1>איתי נתנאל</h1>
	</div>
</div>

<div class="container mx-auto px-5 lg:max-w-screen-sm">
	<div class="w-full lg:flex">
		<div class="w-full w-1 lg:w-2/3 lg:pr-3">
			@yield ('content')
		</div>
		<div class="w-full lg:w-1/3 pl-3">
			<aside>סיידבר</aside>
		</div>
	</div>
</div>

</body>
</html>
