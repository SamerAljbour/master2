<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * تشغيل التهجير.
     *
     * @return void
     */
    public function up()
    {
Schema::create('countries', function (Blueprint $table) {
    $table->id(); // عمود رئيسي من نوع bigint مع زيادة تلقائية
    $table->string('name')->unique(); // عمود لتخزين اسم الدولة مع خاصية فريدة
    $table->string('code', 10)->unique(); // عمود لتخزين رمز الدولة مع خاصية فريدة
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
        Schema::dropIfExists('countries');
    }
}
