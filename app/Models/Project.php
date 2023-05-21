<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'slug', 'thumbnail', 'languages', 'github_repo'];
    protected $attributes = [
        'year' => 'unknown'
    ];
    use HasFactory;
}
