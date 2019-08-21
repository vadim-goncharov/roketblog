<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRocket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rocket', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table-> string('head');
            $table-> text('discription');
            $table->date('pub_date');
            $table-> bigInteger('id_autor');
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
        Schema::dropIfExists('rocket');
    }
}
