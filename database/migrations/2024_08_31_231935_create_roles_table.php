<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRolesTable extends Migration
{
    /**
     * تشغيل التهجير.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id(); // عمود رئيسي من نوع bigint مع زيادة تلقائية
            $table->string('name'); // عمود لتخزين اسم الدور
            $table->timestamps(); // عمودين لتوقيت الإنشاء والتحديث
        });

        // إدراج الأدوار مباشرة بعد إنشاء الجدول
        DB::table('roles')->insert([
            ['name' => 'user'],
            ['name' => 'admin'],
            ['name' => 'super admin'],
        ]);
    }

    /**
     * التراجع عن التهجير.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
