<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->integer('OwnerID')->comment('オーナーID');
            $table->integer('DogID')->comment('犬ID');
            $table->string('OwnerName', 30)->comment('オーナーの名前');
            $table->string('StreetAddress', 50)->comment('住所');
            $table->string('OwnerGender', 5)->comment('オーナーの性別');
            $table->integer('TEL')->comment('電話番号');
            $table->integer('OwnerBirthday')->comment('オーナーの誕生日');
            $table->string('email', 50)->comment('メールアドレス');
            $table->string('password', 50)->comment('パスワード');
            $table->string('FamilyHospital', 50)->comment('かかりつけの動物病院');
            $table->date('FirstVisit')->comment('初回来店日');
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
        Schema::dropIfExists('owner');
    }
}
