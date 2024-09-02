<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagePricingTable extends Migration
{
    /**
     * تشغيل التهجير.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_pricing', function (Blueprint $table) {
            $table->id(); // عمود رئيسي من نوع bigint مع زيادة تلقائية
            $table->unsignedBigInteger('package_type_id'); // عمود لتخزين معرف نوع الطرد
            $table->decimal('price', 10, 2); // عمود لتخزين السعر باستخدام نوع decimal

            // تعريف العلاقة بين الجداول
            $table->foreign('package_type_id')
                  ->references('id')
                  ->on('package_types')
                  ->onDelete('cascade'); // إذا تم حذف نوع الطرد، يتم حذف جميع الأسعار المرتبطة

            $table->timestamps(); // ينشئ عمودين لتوقيت الإنشاء والتحديث
        });
    }

    /**
     * التراجع عن التهجير.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_pricing');
    }
}
