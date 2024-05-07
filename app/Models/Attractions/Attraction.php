<?php

namespace App\Models\Attractions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    use HasFactory;

    protected $table = 'attractions';

    // расстояние от цента
    // рейтинг?
    // бесплоатный входа (да/ нет)
    // text
    protected $fillable = ['category_id','title', 'h1', 'meta_description', 'breadcrumb', 'preview', 'content', 'status'];

    public $timestamps = false;
}
