@if(isset($pageData))
    <div id="{{ $pageData['slug'] }}" class="container mx-auto px-4 sm:px-6 lg:px-8 sm:py-8 lg:px-16">
        <h1>{{ $pageData['data']['title'] }}</h1>
        {!! Advoor\NovaEditorJs\NovaEditorJs::generateHtmlOutput($pageData['data']['body']) !!}
    </div>
@endif
