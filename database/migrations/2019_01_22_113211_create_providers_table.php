<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string("name");
            $table->string("mobile_number");
            $table->string("address_line_1");
            $table->string("address_line_2");
            $table->string("state");
            $table->string("city");
            $table->string("zip_code");
            $table->double("latitude");
            $table->double("longitude");
            $table->float("rating")->default(0.0);
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
        Schema::dropIfExists('providers');
    }
}
