<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("group_id")->nullable(true);
            $table->bigInteger("product_id")->nullable(true);
            $table->bigInteger("trademark_id")->nullable(true);
            $table->boolean("status")->default(false);
            $table->bigInteger("update_user_id")->nullable(true);
            $table->json("json_detail");
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
        Schema::dropIfExists('todo');
    }
}
