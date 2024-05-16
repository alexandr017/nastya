<?php

namespace App\Models\Attractions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    use HasFactory;

    protected $table = 'attractions';

    protected $fillable = [
        'category_id',
        'alias',
        'title',
        'h1',
        'meta_description',
        'breadcrumb',
        'preview',
        'content',
        'distance_from_center',
        'is_free_entry',
        'is_availability_of_excursions',
        'status'
    ];

    public $timestamps = false;
}
