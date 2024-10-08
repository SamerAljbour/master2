<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryRequest extends Model
{
    use HasFactory;

    protected $table = 'inventory_request'; // اسم الجدول في قاعدة البيانات

    protected $fillable = [
        'user_id',
        'package_id',
        'nationality_status_id',
        'delivered_location_id',
        'name',
        'status_id',
        'email',
        'governorate',
        'housing_details',
        'size',
        'breakable',
        'delivery_service',
        'message',
    ];
}
