<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $table = 'pages';
    public $timestamps = false;
    protected $fillable = [

        'title',
        'meta_keywords',
        'meta_description',
        // 'route_name',
    ];

}
