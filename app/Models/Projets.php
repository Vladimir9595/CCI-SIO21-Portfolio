<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projets extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'content',
        'link',
    ];
}
