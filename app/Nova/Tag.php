<?php

namespace App\Nova;

use App\Tag as TagModel;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Text;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;

class Tag extends Resource
{
    use HasSortableRows;

    public static $model = TagModel::class;

    public static $title = 'name';

    public static $search = [
        'name',
    ];

    public function fields(Request $request)
    {
        return [
            Text::make('Name')->sortable(),
            Boolean::make('Filter', 'is_filter')
        ];
    }
}
