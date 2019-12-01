<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('message');
            $table->integer('accuracy');
            $table->integer('person_id');
            $table->integer('event_id');

            $table->foreign('person_id')
                ->references('id')
                ->on('person')
                ->onDelete('cascade');

            $table->foreign('event_id')
                ->references('id')
                ->on('event')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('questions');
    }
}
