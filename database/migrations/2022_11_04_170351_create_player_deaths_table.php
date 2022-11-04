<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Player;

class CreatePlayerDeathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_deaths', function (Blueprint $table) {
            $table->foreignIdFor(Player::class);
            $table->unsignedBigInteger('time')->nullable(false)->default(0);
            $table->integer('level')->nullable(false)->default(1);
            $table->string('killed_by')->nullable(false);
            $table->tinyInteger('is_player')->nullable(false)->default(1);
            $table->string('mostdamage_by')->nullable(false);
            $table->tinyInteger('mostdamage_is_player')->nullable(false);
            $table->tinyInteger('unjustified')->nullable(false)->default(0);
            $table->tinyInteger('mostdamage_unjustified')->nullable(false)->default(0);
            //$table->foreign('player_id')->on('players')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_deaths');
    }
}
