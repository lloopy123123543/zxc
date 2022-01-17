<?php

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZxcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zxc', function (Blueprint $table) {
            $table->id();
            $table->text('zxc_name')->comment("имя_zxc")->nullable();
            $table->integer('mmr')->comment("рейтинг");
            $table->text('main_hero')->comment("мейн");
            $table->timestamp('created_at')->nullable();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zxc');
    }
}
