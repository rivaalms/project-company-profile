<?php

namespace App\Models;

use Brackets\AdminUI\Traits\HasWysiwygMediaTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasWysiwygMediaTrait;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'published_at',
        'enabled',

    ];


    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/posts/'.$this->getKey());
    }
}
