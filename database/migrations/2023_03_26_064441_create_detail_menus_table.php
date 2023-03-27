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
        Schema::create('detail_menus', function (Blueprint $table) {
            $table->id();
            $table->string('detail_menu_name');
            $table->integer('price');
            $table->integer('stock');
            $table->unsignedBigInteger('menu_id');
            $table->foreign('menu_id') -> references ('id') ->on('menus');
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
        Schema::dropIfExists('detail_menus');
    }
};
