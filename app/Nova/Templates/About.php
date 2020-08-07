<?php

namespace App\Nova\Templates;

use Advoor\NovaEditorJs\NovaEditorJs;
use Laravel\Nova\Fields\Text;
use Illuminate\Http\Request;
use OptimistDigital\NovaPageManager\Template;

class About extends Template
{
    public static $type = 'page';
    public static $name = 'about-page';
    public static $seo = false;
    public static $view = null;

    public function fields(Request $request): array
    {
        return [
            Text::make('Title'),
            NovaEditorJs::make('Body')
        ];
    }
}
