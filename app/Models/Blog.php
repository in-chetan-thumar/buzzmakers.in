<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table='blogs';

    protected $fillable = [
        'id',
        'title',
        'description',
        'cover_photo',
        'is_article',
        'is_featured',
        'is_conversation',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];
}

