<?php

namespace App\Models;

use App\Enums\PostState;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory, Searchable;

    protected $appends = ['path'];

    protected $casts = [
        'state' => PostState::class
    ];

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'body'  => $this->body,
        ];
    }

    public function path(): Attribute
    {
        return new Attribute(fn() => route('posts.show', $this));
//        return Attribute::get(fn() => route('posts.show', $this));
    }

    /*public function getPathAttribute(): string
    {
        return route('posts.show', $this);
    }*/
}
