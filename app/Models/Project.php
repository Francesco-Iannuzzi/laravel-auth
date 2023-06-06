<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'made_by', 'slug', 'description', 'creation_date', 'cover', 'link', 'code_link', 'trace'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
}