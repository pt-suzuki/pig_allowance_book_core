<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameLongColumnShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->renameColumn("lang","long");
            $table->text("address")->nullable(true);
        });

        Schema::table('shops', function (Blueprint $table) {
            $table->float("lat")->nullable(true)->change();
            $table->float("long")->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->renameColumn("long","lang");
            $table->removeColumn("address");
        });

        Schema::table('shops', function (Blueprint $table) {
            $table->float("lat")->nullable(false)->change();
            $table->float("lang")->nullable(false)->change();
        });
    }
}
