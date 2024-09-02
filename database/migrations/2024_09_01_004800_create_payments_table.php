<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * تشغيل التهجير.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id(); // عمود رئيسي من نوع bigint مع زيادة تلقائية
            $table->unsignedBigInteger('delivery_request_id'); // عمود لتخزين معرف طلب التوصيل
            $table->decimal('amount', 10, 2); // عمود لتخزين المبلغ
            $table->timestamp('payment_date'); // عمود لتخزين تاريخ ووقت الدفع
            $table->string('payment_method'); // عمود لتخزين طريقة الدفع

            // تعريف العلاقة بين الجداول
            $table->foreign('delivery_request_id')
                  ->references('id')
                  ->on('delivery_requests')
                  ->onDelete('cascade');

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
        Schema::dropIfExists('payments');
    }
}
