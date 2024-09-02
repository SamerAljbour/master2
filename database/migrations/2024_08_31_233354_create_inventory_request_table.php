<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryRequestTable extends Migration
{
    /**
     * تشغيل التهجير.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_request', function (Blueprint $table) {
            $table->id(); // عمود رئيسي من نوع bigint مع زيادة تلقائية
            $table->bigInteger('user_id'); // عمود لتخزين معرف المستخدم
            $table->integer('package_id'); // عمود لتخزين معرف الحزمة
            
            $table->integer('nationality_status_id'); // عمود لتخزين حالة الجنسية
            $table->bigInteger('delivered_location_id'); // عمود لتخزين موقع التسليم
            $table->string('name'); // عمود لتخزين اسم الطلب
            $table->integer('status_id'); // عمود لتخزين حالة الطلب

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
        Schema::dropIfExists('inventory_request');
    }
}
