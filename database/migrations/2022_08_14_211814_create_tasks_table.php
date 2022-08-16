<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->unsignedSmallInteger('importance')->nullable();

            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('status_id');

            $table->index('category_id', 'task_category_idx');
            $table->index('status_id', 'task_status_idx');
            $table->foreign('category_id', 'task_category_fk')->on('categories')->references('id');
            $table->foreign('status_id', 'task_status_fk')->on('statuses')->references('id');
            
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
