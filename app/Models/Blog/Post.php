<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = ['title', 'h1', 'meta_description', 'breadcrumb', 'preview', 'content', 'date', 'status'];

    public $timestamps = false;

}
