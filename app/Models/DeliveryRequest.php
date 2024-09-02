<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryRequest extends Model
{
    use HasFactory;

    public function requestStatus()
    {
        return $this->belongsTo(RequestStatus::class, 'status_id');
    }

    public function pickupLocation()
    {
        return $this->belongsTo(PickupLocation::class, 'pickup_location_id');
    }

    public function deliveredLocation()
    {
        return $this->belongsTo(DeliveredLocation::class, 'delivered_location_id');
    }

    public function nationalityStatus()
    {
        return $this->belongsTo(NationalityStatus::class, 'nationality_status_id');
    }

    public function deliveryType()
    {
        return $this->belongsTo(DeliveryType::class, 'delivary_type_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
