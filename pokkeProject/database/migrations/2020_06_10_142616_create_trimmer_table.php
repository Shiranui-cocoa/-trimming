<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrimmerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trimmers', function (Blueprint $table) {
            $table->integer('TrimmerID')->comment('トリマーID');
            $table->string('TrimmerName', 30)->comment('トリマーの名前');
            $table->integer('TrimmerHistory')->comment('トリマー歴');
            $table->integer('nominate')->comment('指名料');
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
        Schema::dropIfExists('trimmer');
    }
}
