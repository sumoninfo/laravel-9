<?php

namespace App\Models;

use App\Enums\PostState;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'state' => PostState::class
    ];
}
