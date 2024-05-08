<?php

namespace App\Models\Attractions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttractionCategory extends Model
{
    use HasFactory;

    protected $table = 'attraction_categories';

    protected $fillable = ['id','name'];

    public $timestamps = false;
}
