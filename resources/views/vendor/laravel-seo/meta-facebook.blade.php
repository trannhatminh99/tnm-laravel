<meta property="og:locale" content="{{ Seo::get('og-locale') }}" />
<meta property="og:type" content="{{Seo::get('og-type')}}" />
<meta property="og:url" content="{{ Request::url() }}" />
<meta property="og:site_name" content="{{ Seo::get('global-title') }}" />
<meta property="og:title" content="{{ Seo::get('title') ? str_limit(Seo::get('title'), 100): (Seo::get('global-title') ? Seo::get('global-title') : Seo::get('global-description')) }}" />
<meta property="og:description" content="{{ Seo::get('description') ? str_limit(Seo::get('description'), 156) : Seo::get('global-description') }}" />
@if(Seo::get('category'))
    <meta property="category" content="{{ Seo::get('category') }}"/>
@endif
<meta property="og:image" content="{{ Seo::get('image') ? Seo::get('image') : Seo::get('global-image') }}" />
<meta property="og:image:url" content="{{ Seo::get('image') ? Seo::get('image') : Seo::get('global-image') }}" />
<meta property="og:image:alt" content="{{ Seo::get('title') ? Seo::get('title') . ' - ' . Seo::get('global-title') : Seo::get('global-description') }}" />
<meta property="og:updated_time" content="{{ Seo::get('updated_at') }}" />
@if(Seo::get('use-amp'))
    <link rel="amphtml" href="{{ Request::url() }}/amp" />
@endif
@if(Seo::get('og-image-width'))
    <meta property="og:image:width" content="{{ Seo::get('og-image-width') }}"/>
@endif
@if(Seo::get('og-image-height'))
    <meta property="og:image:height" content="{{ Seo::get('og-image-height') }}"/>
@endif
@if(Seo::get('fb-app-id'))
    <meta property="fb:app_id" content="{{ Seo::get('fb-app-id') }}" />
@endif
@if(Seo::get('fb-pages'))
    <meta property="fb:pages" content="{{ Seo::get('fb-pages') }}" />
@endif
@if(Seo::get('fb-page-url'))
    <meta property="article:publisher" content="https://www.facebook.com/Tin-Nhanh-24h-105592077521737/">
    <meta property="article:author" content="https://www.facebook.com/Tin-Nhanh-24h-105592077521737/">
@endif
