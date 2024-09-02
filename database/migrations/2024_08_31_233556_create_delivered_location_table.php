<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveredLocationTable extends Migration
{
    /**
     * تشغيل التهجير.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivered_location', function (Blueprint $table) {
            $table->id(); // عمود رئيسي من نوع bigint مع زيادة تلقائية
            $table->string('address1'); // عمود لتخزين العنوان الأول
            $table->string('address2')->nullable(); // عمود لتخزين العنوان الثاني، يمكن أن يكون فارغًا
            $table->string('city'); // عمود لتخزين المدينة
            $table->integer('postal_code'); // عمود لتخزين الرمز البريدي
            $table->string('name'); // عمود لتخزين اسم الموقع
            $table->integer('status_id'); // عمود لتخزين حالة الموقع

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
        Schema::dropIfExists('delivered_location');
    }
}
