<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;

    protected $table = 'contact';

    protected $fillable = [
        'business_name',
        'business_phone',
        'website',
        'category',
        'address',
        'city',
        'country',
        'zip',
        'pic_name',
        'pic_path',
        'EIN_name',
        'EIN_path',
        'full_name',
        'dob',
        'phone_number',
        'payment_method',
        'verify_pay',
    ];

    // public $timestamps = false;
}
