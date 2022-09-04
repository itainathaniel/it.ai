<!DOCTYPE html>
<html>
<head>
	<title>Itai Nathaniel</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-grey-lightest">

<div class="container mx-auto flex text-center w-screen">
	<div class="lg:w-2/5 mx-auto mt-4 p-4 text-2xl lg:text-sm bg-white rounded shadow-lg text-grey-darkest">
		<img class="w-48 h-48 rounded-full my-6 inline" src="{{ asset('images/profile_pic.png') }}" alt="Itai Nathaniel's avatar">
		<ul class="list-reset leading-loose">
			<li class="leading-normal">
				I'm <span class="font-bold">Itai Nathaniel</span>, a fullstack web developer (and also a pâtissier & a pilot) from Tel Aviv, Israel. I'm a senior backend developer in <a href="https://brainpop.com">BrainPOP</a>, married to Chen and father to Ilil, Aya & Arbel.
			</li>
			<li>
				<a href="mailto:itainathaniel@gmail.com">itainathaniel@gmail.com</a> / <a href="mailto:im@it.ai">im@it.ai</a>
			</li>
			<li>
				+972 (52) 3591891
			</li>
			<li>
				26 Rambam st., Tel Aviv - Jaffa, Israel 6581312
			</li>
		</ul>
		<ul class="list-reset flex flex-row justify-center my-10">
			<li class="px-4 lg:m-2">
				<a href="https://twitter.com/itainathaniel">
					<img class="w-12 lg:w-6" src="{{ asset('images/icon_twitter.png') }}" alt="twitter">
				</a>
			</li>
			<li class="px-4 lg:m-2">
				<a href="https://github.com/itainathaniel">
					<img class="w-12 lg:w-6" src="{{ asset('images/icon_github.png') }}" alt="twitter">
				</a>
			</li>
			<li class="px-4 lg:m-2">
				<a href="https://linkedin.com/in/itainathaniel">
					<img class="w-12 lg:w-6" src="{{ asset('images/icon_linkedin.png') }}" alt="twitter">
				</a>
			</li>
			<li class="px-4 lg:m-2">
				<a href="https://facebook.com/itainathaniel">
					<img class="w-12 lg:w-6" src="{{ asset('images/icon_facebook.png') }}" alt="twitter">
				</a>
			</li>
			<li class="px-4 lg:m-2">
				<a href="https://instagram.com/itainathaniel">
					<img class="w-12 lg:w-6" src="{{ asset('images/icon_instagram.png') }}" alt="twitter">
				</a>
			</li>
		</ul>
	</div>
</div>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-13277615-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-13277615-1');
</script>

</body>
</html>
