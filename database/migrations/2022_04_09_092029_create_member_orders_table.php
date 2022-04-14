<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_orders', function (Blueprint $table) {
            $table->id();
            $table->string('member_name');
            $table->string('member_address');
            $table->string('member_phone');
            $table->string('meal_image');
            $table->string('meal_name');
            $table->string('meal_type');
            $table->string('partner_organizations');
            $table->string('partner_address');
            $table->string('type_of_meal');
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
        Schema::dropIfExists('member_orders');
    }
}
