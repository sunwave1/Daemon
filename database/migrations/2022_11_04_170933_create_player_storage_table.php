<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Player;

class CreatePlayerStorageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_storage', function (Blueprint $table) {
            $table->foreignIdFor(Player::class)->nullable(false)->default(0);
            $table->unsignedInteger('key')->nullable(false)->default(0);
            $table->integer('value')->nullable(false)->default(0);
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
        Schema::dropIfExists('player_storage');
    }
}
