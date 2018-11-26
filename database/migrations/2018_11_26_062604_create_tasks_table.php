<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->text("description");
            $table->unsignedInteger("budget_start");
            $table->unsignedInteger("budget_end");
            $table->float('user_rating')->default(0);
            $table->float('worker_rating')->default(0);
            $table->double("latitude");
            $table->double("longitude");
            $table->text("address");
            $table->unsignedInteger("status");
            $table->unsignedInteger("user_id");
            $table->unsignedInteger("worker_id");
            $table->unsignedInteger("category_id");
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
        Schema::dropIfExists('tasks');
    }
}
