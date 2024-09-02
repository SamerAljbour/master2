<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryRequestsTable extends Migration
{
    /**
     * تشغيل التهجير.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_requests', function (Blueprint $table) {
            $table->id(); // عمود رئيسي من نوع bigint مع زيادة تلقائية
            $table->unsignedBigInteger('user_id'); // عمود لتخزين معرف المستخدم
            $table->unsignedBigInteger('delivery_type_id'); // تغيير إلى unsignedBigInteger وإضافة المفتاح الأجنبي
            $table->unsignedBigInteger('pickup_location_id'); // عمود لتخزين معرف موقع الاستلام
            $table->unsignedBigInteger('nationality_status_id'); // تغيير إلى unsignedBigInteger وإضافة المفتاح الأجنبي
            $table->unsignedBigInteger('delivered_location_id'); // عمود لتخزين معرف موقع التسليم
            $table->string('name'); // عمود لتخزين اسم الطلب
            $table->integer('status_id'); // عمود لتخزين حالة الطلب
            $table->unsignedBigInteger('country_id')->nullable(); // عمود لتخزين معرف البلد مع إمكانية أن يكون فارغاً

            // تعريف العلاقات مع الجداول الأخرى
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null');
            $table->foreign('delivered_location_id')->references('id')->on('delivered_location')->onDelete('cascade');
            $table->foreign('nationality_status_id')->references('id')->on('nationality_status')->onDelete('cascade');
            $table->foreign('pickup_location_id')->references('id')->on('pickup_location')->onDelete('cascade'); // إضافة المفتاح الأجنبي
            $table->foreign('delivery_type_id')->references('id')->on('delivery_type')->onDelete('cascade'); // إضافة المفتاح الأجنبي

            $table->timestamps(); // عمودين لتوقيت الإنشاء والتحديث
        });
    }

    /**
     * التراجع عن التهجير.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delivery_requests', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['country_id']);
            $table->dropForeign(['delivered_location_id']);
            $table->dropForeign(['nationality_status_id']);
            $table->dropForeign(['pickup_location_id']);
            $table->dropForeign(['delivery_type_id']); // حذف المفتاح الأجنبي عند التراجع
        });

        Schema::dropIfExists('delivery_requests');
    }
}
