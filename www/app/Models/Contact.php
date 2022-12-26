<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table ="contacts";
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'website',
        'project',
        'budget',
        'services',
        'competitors',
        'reference',
        'documents',       
        'schedule_date',       
        'timezone',       
        'schedule_time',       
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];
}
