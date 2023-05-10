<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJaipursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaipurs', function (Blueprint $table) {
            $table->id();
            $table->string('customername');
            $table->string('date');
            $table->string('name');
            $table->string('address');
            $table->string('state');
            $table->string('mobile');
            $table->string('email');
            $table->string('gst');
            $table->string('pan');
            $table->string('acname');
            $table->string('acnumber');
            $table->string('ifsc');
            $table->string('invoice');

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
        Schema::dropIfExists('jaipurs');
    }
}
