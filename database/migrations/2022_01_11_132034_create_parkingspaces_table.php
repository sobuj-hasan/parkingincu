<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingspacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkingspaces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->string('city');
            $table->string('post_code')->nullable();
            $table->string('address');
            $table->integer('price_hourly')->nullable();
            $table->integer('price_day')->nullable();
            $table->integer('price_monthly')->nullable();
            $table->string('image')->nullable();
            $table->string('money_type')->nullable();
            $table->string('money_type');
            $table->string('parking_type');
            $table->string('space_area');
            $table->string('cancellation_terms');
            $table->string('location');
            $table->string('status')->default('1')->comment('1=active, 2=deactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parkingspaces');
    }
}
