<?php

namespace App;

use Spatie\Tags\HasTags;
use Spatie\Tags\Tag as SpatieTag;

class Tag extends SpatieTag
{
    use HasTags;

    public $sortable = [
        'order_column_name' => 'order_column',
        'sort_when_creating' => true,
    ];

    public function artworks()
    {
        return $this->morphedByMany('App\Artwork', 'taggable');
    }
}
