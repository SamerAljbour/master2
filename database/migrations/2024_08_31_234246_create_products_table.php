<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * تشغيل التهجير.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // عمود رئيسي من نوع bigint مع زيادة تلقائية
            $table->unsignedBigInteger('inventory_id'); // عمود لتخزين معرف المخزون
            $table->string('name'); // عمود لتخزين اسم المنتج
            $table->string('size'); // عمود لتخزين حجم المنتج
            $table->string('space_required'); // عمود لتخزين المساحة المطلوبة

            // تعريف العلاقات بين الجداول إذا لزم الأمر
            $table->foreign('inventory_id')->references('id')->on('inventory')->onDelete('cascade');

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
        Schema::dropIfExists('products');
    }
}
