<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Player;

class CreatePlayerDepotlockeritemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_depotlockeritems', function (Blueprint $table) {
            $table->foreignIdFor(Player::class)->unique();
            $table->integer('sid')->nullable(false)->unique();
            $table->integer('pid')->nullable(false)->default(0);
            $table->smallInteger('itemtype')->nullable(false);
            $table->smallInteger('count')->nullable(false)->default(0);
            $table->binary('attributes')->nullable(false);
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
        Schema::dropIfExists('player_depotlockeritems');
    }
}
