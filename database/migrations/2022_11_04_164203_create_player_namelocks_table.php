<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Player;

class CreatePlayerNamelocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_namelocks', function (Blueprint $table) {
            $table->foreignIdFor(Player::class);
            $table->string('reason')->nullable(false);
            $table->bigInteger('namelocked_at')->nullable(false);
            $table->integer('namelocked_by')->nullable(false);

            //$table->foreign('player_id')->on('players')->references('id')->onDelete('cascade');
            //$table->foreign('namelocked_by')->on('players')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_namelocks');
    }
}
