<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDetailsToPackagePricingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('package_pricing', function (Blueprint $table) {
            $table->string('space_dimensions')->nullable();
            $table->integer('max_items')->nullable();
            $table->string('rental_duration')->nullable();
            $table->string('surveillance')->default(false);
            $table->string('delivery_service')->default(false);
            $table->text('usage_rules')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('package_pricing', function (Blueprint $table) {
            $table->dropColumn([
                'space_dimensions', 
                'max_items', 
                'rental_duration', 
                'surveillance', 
                'delivery_service', 
                'usage_rules'
            ]);
        });
    }
}
