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
            $table->integer('user_id')->nullable();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('post_code')->nullable();
            $table->string('address');
            $table->string('price_hourly')->nullable();
            $table->string('price_day')->nullable();
            $table->string('price_monthly')->nullable();
            $table->string('image')->nullable();
            $table->string('icon_image')->nullable();
            $table->string('money_type')->nullable();
            $table->string('parking_type');
            $table->string('space_type');
            $table->string('space_area');
            $table->string('cancellation_terms');
            $table->string('location')->nullable();
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
