<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\TextArea;
use Ctessier\NovaAdvancedImageField\AdvancedImage;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;
use Spatie\TagsField\Tags;

class Artwork extends Resource
{
    use HasSortableRows;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Artwork::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'title',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            Text::make('Title')->rules('required', 'max:255')->sortable(),
            TextArea::make('Description')->rules('max:255'),
            Tags::make('Media')->type('media')->rules('required', 'max:255')->hideFromIndex(),
            Image::make('Image')->creationRules('required'),
            AdvancedImage::make('Thumbnail')->croppable(16/9)->creationRules('required'),
            Text::make('Alt Text')->rules('required')->hideFromIndex(),
            Boolean::make('Push to Social', 'publish_social'),
            Boolean::make('Instagram', 'published_instagram')->hideWhenCreating()->hideWhenUpdating(),
            Boolean::make('Twitter', 'published_twitter')->hideWhenCreating()->hideWhenUpdating(),
            Tags::make('Tags')->type('tag'),
            DateTime::make('Publish On')->sortable()
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
