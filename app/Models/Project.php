<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'made_by', 'description', 'creation_date'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
}