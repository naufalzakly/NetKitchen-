<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_buyers', function (Blueprint $table) {
            $table->id();
            $table->Integer('quantity');
            $table->Integer('total_price');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('detail_menu_id');
            $table->foreign('detail_menu_id') -> references ('id') ->on('detail_menus');
            $table->foreign('user_id') -> references ('id') ->on('users');
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
        Schema::dropIfExists('detail_buyers');
    }
};
