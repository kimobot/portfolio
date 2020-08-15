<?php

namespace App;

use Spatie\Tags\HasTags;
use Spatie\Tags\Tag as SpatieTag;

class Tag extends SpatieTag
{
    use HasTags;

    public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
    ];
}
