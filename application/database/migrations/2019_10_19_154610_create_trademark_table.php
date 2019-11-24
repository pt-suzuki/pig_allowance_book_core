<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrademarkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trademarks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('brand_id');
            $table->bigInteger('product_id');
            $table->text('name');
            $table->json('json_detail');
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
        Schema::dropIfExists('trademark');
    }
}
