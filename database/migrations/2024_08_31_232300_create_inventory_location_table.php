<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryLocationTable extends Migration
{
    /**
     * تشغيل التهجير.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_location', function (Blueprint $table) {
            $table->id(); // عمود رئيسي من نوع bigint مع زيادة تلقائية
            $table->integer('local'); // عمود لتخزين القيمة المحلية
            $table->string('status'); // عمود لتخزين حالة المخزون

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
        Schema::dropIfExists('inventory_location');
    }
}
