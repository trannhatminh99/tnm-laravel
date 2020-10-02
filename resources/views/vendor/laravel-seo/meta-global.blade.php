<title>{{ Seo::get('title') ? str_limit(Seo::get('title'), 100) . ' | Thể Thao': (Seo::get('global-title') ? Seo::get('global-title') : Seo::get('global-description')) }}</title>
<meta http-equiv="content-language" content="vi" />
<meta id="metakeywords" name="keywords" content="{{ Seo::get('keywords') ? Seo::get('keywords') : Seo::get('global-keywords') }}">
<meta id="newskeywords" name="news_keywords" content="{{ Seo::get('keywords') ? Seo::get('keywords') : Seo::get('global-keywords') }}">
<meta name="description" content="{{ Seo::get('description') ? str_limit(Seo::get('description'), 156) : Seo::get('global-description') }}">
<link rel="canonical" href="{{ Request::url() }}">
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<link rel="alternate" media="only screen and (max-width: 640px)" href="{{ Request::url() }}" />
<link rel="alternate" media="handheld" href="{{ Request::url() }}" hreflang="vi-VN"  />
<meta name="abstract" content="{{ Seo::get('global-description') }}" />
<meta name="author" content="{{ Seo::get('global-author') }}">
<meta name="copyright" content="{{ Seo::get('global-copyright') }}" />
<meta name="language" content="{{ Seo::get('global-language') }}" />
<meta name="distribution" content="{{ Seo::get('global-distribution') }}" />
<meta http-equiv="refresh" content="{{ Seo::get('global-refresh') }};URL={{ Request::fullUrl() }}" />
<meta name="REVISIT-AFTER" content="{{ Seo::get('global-revisit-after') }}" />
<meta name="RATING" content="{{ Seo::get('global-rating') }}" />

