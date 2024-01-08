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
        Schema::table('orders', function (Blueprint $table){
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->tinyInteger('method'); //1 COD 2 tt truc tuyen
            $table->tinyInteger('status'); //1 đang đóng gói 2 đang giao hàng 3 đã nhận hàng 4 da huy
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
