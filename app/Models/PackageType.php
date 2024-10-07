<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageType extends Model
{
    use HasFactory;

    // الحقول القابلة للتعيين الجماعي
    protected $fillable = ['name', 'dimensions']; // أضف 'name' و 'dimensions' إلى fillable

    // تحديد العلاقة مع PackagePricing
    public function packagePricing()
    {
        return $this->hasMany(PackagePricing::class, 'package_type_id');
    }
}
