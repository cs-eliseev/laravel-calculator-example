<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>{{ $page->seo->title ?? 'Главная страница' }}</title>
@if(!empty($page->seo->description))<meta name="description" content="{{ $page->seo->description }}" />@endif

@if(!empty($page->seo->keywords))<meta name="keywords" content="{{ $page->seo->keywords }}" />@endif

<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
