<?php

namespace App\Models;

use App\Enums\PostState;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory, Searchable;

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
}
