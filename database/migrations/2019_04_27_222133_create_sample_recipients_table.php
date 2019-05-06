<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSampleRecipientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sample_recipients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->string('fullName');
            $table->string('email');
            $table->string('address');
            $table->boolean('cb1');
            $table->boolean('cb2')->nullable();
            $table->boolean('cb3')->nullable();
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
        Schema::dropIfExists('sample_recipients');
    }
}
