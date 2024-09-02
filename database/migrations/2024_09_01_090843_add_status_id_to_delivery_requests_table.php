<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusIdToDeliveryRequestsTable extends Migration
{
    /**
     * تشغيل التهجير.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delivery_requests', function (Blueprint $table) {
            // التأكد من أن العمود status_id موجود ويكون نوعه مناسب
            $table->unsignedBigInteger('status_id')->change(); // تأكد من أن نوع العمود يتطابق

            // إضافة مفتاح أجنبي إلى العمود status_id
            $table->foreign('status_id')->references('id')->on('request_status')->onDelete('cascade');
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
            // حذف المفتاح الأجنبي إذا تم التراجع
            $table->dropForeign(['status_id']);
            $table->dropColumn('status_id');
        });
    }
}
