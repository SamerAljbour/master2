<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProductsTable extends Migration
{
    /**
     * تشغيل التهجير.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_products', function (Blueprint $table) {
            $table->id(); // عمود رئيسي من نوع bigint مع زيادة تلقائية
            $table->unsignedBigInteger('user_id'); // عمود لتخزين معرف المستخدم
            $table->unsignedBigInteger('product_id'); // عمود لتخزين معرف المنتج

            // تعريف العلاقات بين الجداول إذا لزم الأمر
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

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
        Schema::dropIfExists('user_products');
    }
}
