@php $pageData = nova_get_page_by_slug($slug) @endphp
<h1>{{ $pageData['data']['title'] }}</h1>
<p>{{ $pageData['data']['body'] }}</p>
