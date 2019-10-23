<!DOCTYPE html>
<html>
<head>
	<title>Itai Nathaniel's Blog</title>
	<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<style type="text/css">
	html, body {
		direction: rtl; text-align: right;
	}
	</style>
</head>
<body class="bg-gray-100">

<div>
	<div id="header">
		<div class="flex bg-white border-b border-gray-200 fixed top-0 inset-x-0 z-100 h-16 items-center">
			<div class="w-full max-w-screen-xl relative mx-auto px-6">
				<div class="flex items-center -mx-6">
					<div class="lg:w-1/4 xl:w-1/5 pl-6 pr-6 lg:pr-8">
						<div class="flex items-center">
							<a href="/blog/" class="block lg:mr-4">איתי נתנאל</a>
						</div>
					</div>
					<div class="flex flex-grow lg:w-3/4 xl:w-4/5">
						<div class="hidden lg:flex lg:items-center lg:justify-between xl:w-1/4 px-6">
							<div class="relative mr-4">אחד</div>
							<div class="relative">שניים</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="w-full max-w-screen-xl mx-auto px-6">
	<div class="lg:flex -mx-6">
		<div id="sidebar" class="hidden fixed inset-0 pt-16 h-full bg-white z-90 w-full border-b -mb-16 lg:-mb-0 lg:static lg:h-auto lg:overflow-y-visible lg:border-b-0 lg:pt-0 lg:w-1/4 lg:block lg:border-0 xl:w-1/5">
			<div id="navWrapper" class="h-full overflow-y-auto scrolling-touch lg:h-auto lg:block lg:relative lg:sticky lg:top-16 bg-white lg:bg-transparent">
				<div id="nav" class="px-6 pt-6 overflow-y-auto text-base lg:text-sm lg:py-12 lg:pl-6 lg:pr-8 sticky?lg:h-(screen-16)">
					<div class="mb-8">
						<h5 class="mb-3 lg:mb-2 text-gray-500 uppercase tracking-wide font-bold text-sm lg:text-xs">Base styles</h5>
						<ul>
							<li class="mb-3 lg:mb-1">
								<a class="px-2 -mx-2 py-1 transition-fast relative block text-teal-600 font-medium" href="/docs/preflight">
									<span class="rounded absolute inset-0 bg-teal-200 opacity-25"></span>
									<span class="relative">Preflight</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="content-wrapper" class="min-h-screen w-full lg:static lg:max-h-full lg:overflow-visible lg:w-3/4 xl:w-4/5">
			<div id="content">
				<div id="app" class="flex">
					<div class="pt-24 pb-16 lg:pt-28 w-full">
						<div class="markdown mb-6 px-6 max-w-3xl mx-auto lg:ml-0 lg:mr-auto xl:mx-0 xl:px-12 xl:w-3/4">
							<h1>Preflight</h1>
							<div class="mt-0 mb-4 text-gray-600">An opinionated set of base styles for Tailwind projects.</div>
							<hr class="my-8 border-b-2 border-gray-200">
						</div>
						<div class="flex">
							<div class="markdown px-6 xl:px-12 w-full mx-auto lg:ml-0 lg:mr-auto xl:mx-0">
								@yield ('content')
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

{{-- <footer></footer> --}}

</body>
</html>
