<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestStatus extends Model
{
    use HasFactory;

    public function deliveryRequests()
    {
        return $this->hasMany(DeliveryRequest::class, 'status_id');
    }

    public function inventoryRequests()
    {
        return $this->hasMany(InventoryRequest::class, 'status_id');
    }
}
