<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryType extends Model
{
    use HasFactory;

    public function deliveryRequests()
    {
        return $this->hasMany(DeliveryRequest::class, 'delivary_type_id');
    }
}
