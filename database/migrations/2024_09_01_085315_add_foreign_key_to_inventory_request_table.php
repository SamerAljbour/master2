<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToInventoryRequestTable extends Migration
{
    /**
     * تشغيل التهجير.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inventory_request', function (Blueprint $table) {
            // إضافة مفتاح أجنبي إلى العمود user_id
            $table->unsignedBigInteger('user_id')->change(); // تأكد من أن نوع العمود يتطابق
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            // يمكنك إضافة مفاتيح أجنبية أخرى إذا لزم الأمر
            // $table->foreign('delivered_location_id')->references('id')->on('locations')->onDelete('cascade');
        });
    }

    /**
     * التراجع عن التهجير.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inventory_request', function (Blueprint $table) {
            // حذف المفتاح الأجنبي إذا تم التراجع
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id'); // حذف العمود إذا لم يكن موجودًا
        });
    }
}
