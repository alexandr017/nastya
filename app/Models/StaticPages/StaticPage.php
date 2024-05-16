<?php

namespace App\Models\StaticPages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{
    use HasFactory;

    protected $table = 'static_pages';

    protected $fillable = ['alias','title', 'h1', 'meta_description', 'breadcrumb', 'lead', 'content'];

    public $timestamps = false;
}
