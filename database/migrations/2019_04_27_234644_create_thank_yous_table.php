<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThankYousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thank_yous', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sampleRecipient_id')->unsigned()->nullable();
            $table->longText('Q1')->nullable();
            $table->longText('Q2')->nullable();
            $table->foreign('sampleRecipient_id')->references('id')->on('sample_recipients')->onDelete('set null');
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
        Schema::dropIfExists('thank_yous');
    }
}
