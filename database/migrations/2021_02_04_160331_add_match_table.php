<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match', function (Blueprint $table) {
            $table->id();
			
			$table->integer('player1_score');
			$table->integer('player2_score');
			
			$table->integer('tournament_id')->unsigned();
			$table->foreign('tournament_id')->references('id')->on('tournament');
			
			$table->integer('player1_id')->unsigned();
			$table->foreign('player1_id')->references('id')->on('player');
			
			$table->integer('player2_id')->unsigned();
			$table->foreign('player2_id')->references('id')->on('player');
			
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
        Schema::dropIfExists('match');
    }
}
