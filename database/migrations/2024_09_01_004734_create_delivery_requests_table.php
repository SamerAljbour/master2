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
            $table->integer('delivery_type_id'); // عمود لتخزين نوع التوصيل
            $table->unsignedBigInteger('pickup_location_id'); // عمود لتخزين معرف موقع الاستلام
            $table->integer('nationality_status_id'); // عمود لتخزين حالة الجنسية
            $table->unsignedBigInteger('delivered_location_id'); // عمود لتخزين معرف موقع التسليم
            $table->string('name'); // عمود لتخزين اسم الطلب
            $table->integer('status_id'); // عمود لتخزين حالة الطلب
            $table->unsignedBigInteger('country_id')->nullable(); // عمود لتخزين معرف البلد مع إمكانية أن يكون فارغاً

            $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null');

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
        Schema::dropIfExists('delivery_requests');
    }
}
