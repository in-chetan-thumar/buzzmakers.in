<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnquiryLandingPage extends Model
{
    use HasFactory;
    protected $table ="enquiry_landing_page";
    protected $fillable = [
        'id',
        'name',
        'email',
        'mobile',
        'website',
        'business_name',
        'message',
        'services',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by',
        'deleted_at',
        'deleted_by',
    ];
}
