<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToInventoryRequestTable extends Migration
{
    public function up()
    {
        Schema::table('inventory_request', function (Blueprint $table) {
            $table->string('governorate'); // إضافة عمود المحافظة
            $table->text('housing_details'); // إضافة عمود تفاصيل السكن
            $table->string('number')->unique()->nullable(); // إضافة عمود الرقم
            $table->string('size'); // إضافة عمود الحجم
            $table->string('breakable'); // إضافة عمود هل يمكن كسره
            $table->string('delivery_service'); // إضافة عمود خدمة التسليم
            $table->text('message')->nullable(); // إضافة عمود الرسالة
            $table->string('payment_method')->nullable(); // إضافة عمود طريقة الدفع
            $table->string('storage_duration'); // إضافة عمود مدة التخزين
            $table->decimal('total_price', 10, 2)->nullable(); // إضافة العمود هنا
        });
    }

    public function down()
    {
        Schema::table('inventory_request', function (Blueprint $table) {
            $table->dropColumn([
                'governorate', 
                'housing_details', 
                'number', 
                'size', 
                'breakable', 
                'delivery_service', 
                'payment_method', 
                'message', 
                'storage_duration',
            ]);
        });
    }
}
