<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingbarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippingbars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bg_color')->nullable();
            $table->string('txt_color')->nullable();
            $table->string('spt_color')->nullable();
            $table->string('opacity')->nullable();
            $table->string('bg_img')->nullable();
            $table->string('name')->nullable();
            $table->string('goal')->nullable();
            $table->string('intial_msg')->nullable();
            $table->string('progress_msg')->nullable();
            $table->string('achive_msg')->nullable();
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
        Schema::dropIfExists('shippingbars');
    }
}
