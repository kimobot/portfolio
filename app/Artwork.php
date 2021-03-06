<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\Tags\HasTags;

class Artwork extends Model implements Sortable
{
    use HasTags;
    use SortableTrait;

    protected $attributes = [
        'publish_social' => 1
    ];

    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'publish_on' => 'datetime',
    ];

    public function getFilterableTags()
    {
        return $this->tags()->where('is_filter', 1)->pluck('name');
    }
}
