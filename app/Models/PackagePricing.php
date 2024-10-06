<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagePricing extends Model
{
    use HasFactory;

    // تحديد اسم الجدول
    protected $table = 'package_pricing'; // تأكد من أن الاسم هنا صحيح

    protected $fillable = ['package_type_id', 'price'];

    // العلاقة مع نموذج PackageType
    public function packageType()
    {
        return $this->belongsTo(PackageType::class, 'package_type_id');
    }
}
