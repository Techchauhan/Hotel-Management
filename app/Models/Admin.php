<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //

    use HasFactory;
    
    protected $fillable = [
        'admin_name', 'hotel_name', 'hotel_image', 'hotel_website', 'owner_name',
        'establishment_date', 'legally_registered', 'contact_number', 'email',
        'address', 'password'
    ];

    protected $hidden = [
        'password',
    ];
}
