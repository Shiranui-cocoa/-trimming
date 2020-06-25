<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Grammars\ChangeColumn;
use Illuminate\Support\Facades\Schema;

class CreateDogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->integer('OwnerID')->comment('オーナーID');
            $table->integer('DogID')->comment('犬ID');
            $table->string('DogName', 30)->comment('犬の名前');
            $table->string('type', 30)->comment('犬の種類');
            $table->string('color', 20)->comment('毛色');
            $table->integer('DogBirthday')->comment('犬の誕生日');
            $table->string('DogGender', 5)->comment('犬の性別');
            $table->string('personality', 100)->comment('性格');
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
        Schema::dropIfExists('dog');
    }
}
