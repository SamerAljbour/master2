<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistancePricingTable extends Migration
{
    /**
     * تشغيل التهجير.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distance_pricing', function (Blueprint $table) {
            $table->id(); // عمود رئيسي من نوع bigint مع زيادة تلقائية
            $table->integer('postal_code_from'); // عمود لتخزين الرمز البريدي من
            $table->integer('postal_code_to'); // عمود لتخزين الرمز البريدي إلى
            $table->decimal('distance', 10, 2); // عمود لتخزين المسافة بين الرموز البريدية بالكيلومترات
            $table->decimal('price', 10, 2); // عمود لتخزين السعر لكل وحدة مسافة

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
        Schema::dropIfExists('distance_pricing');
    }
}
