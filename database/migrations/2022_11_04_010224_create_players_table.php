<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Account;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->nullable(false);
            $table->integer('group_id')->nullable(false)->default(1);
            $table->foreignIdFor(Account::class)->nullable(false);
            $table->integer('level')->default(1)->nullable(false);
            $table->integer('vocation')->default(0)->nullable(false);
            $table->integer('health')->default(150)->nullable(false);
            $table->integer('healthmax')->default(150)->nullable(false);
            $table->bigInteger('experience')->default(0)->nullable(false);
            $table->integer('lookbody')->default(0)->nullable(false);
            $table->integer('lookfeet')->default(0)->nullable(false);
            $table->integer('lookhead')->default(0)->nullable(false);
            $table->integer('looklegs')->default(0)->nullable(false);
            $table->integer('looktype')->default(0)->nullable(false);
            $table->integer('lookaddons')->default(0)->nullable(false);
            $table->unsignedTinyInteger('direction')->default(2)->nullable(false);
            $table->integer('maglevel')->default(0)->nullable(false);
            $table->integer('mana')->default(0)->nullable(false);
            $table->integer('manamax')->default(0)->nullable(false);
            $table->integer('manaspent')->default(0)->nullable(false);
            $table->unsignedInteger('soul')->default(0)->nullable(false);
            $table->unsignedTinyInteger('town_id')->default(1)->nullable(false);
            $table->integer('posx')->default(0)->nullable(false);
            $table->integer('posy')->default(0)->nullable(false);
            $table->integer('posz')->default(0)->nullable(false);
            $table->binary('conditions')->nullable(false);
            $table->integer('cap')->default(400)->nullable(false);
            $table->unsignedTinyInteger('sex')->default(0)->nullable(false);
            $table->bigInteger('lastlogin')->default(0)->nullable(false);
            $table->integer('lastip')->default(0)->nullable(false);
            $table->integer('save')->default(1)->nullable(false);
            $table->tinyInteger('skull')->default(0)->nullable(false);
            $table->bigInteger('skulltime')->default(0)->nullable(false);
            $table->bigInteger('lastlogout')->default(0)->nullable(false);
            $table->tinyInteger('blessings')->default(0)->nullable(false);
            $table->integer('onlinetime')->default(0)->nullable(false);
            $table->bigInteger('deletion')->default(0)->nullable(false);
            $table->bigInteger('balance')->default(0)->nullable(false);
            $table->smallInteger('stamina')->default(2520)->nullable(false);
            $table->integer('skill_fist')->default(10)->nullable(false);
            $table->integer('skill_club')->default(10)->nullable(false);
            $table->integer('skill_sword')->default(10)->nullable(false);
            $table->integer('skill_axe')->default(10)->nullable(false);
            $table->integer('skill_dist')->default(10)->nullable(false);
            $table->integer('skill_shielding')->default(10)->nullable(false);
            $table->integer('skill_fishing')->default(10)->nullable(false);
            $table->unsignedBigInteger('skill_fist_tries')->default(10)->nullable(false);
            $table->unsignedBigInteger('skill_club_tries')->default(10)->nullable(false);
            $table->unsignedBigInteger('skill_sword_tries')->default(10)->nullable(false);
            $table->unsignedBigInteger('skill_axe_tries')->default(10)->nullable(false);
            $table->unsignedBigInteger('skill_dist_tries')->default(10)->nullable(false);
            $table->unsignedBigInteger('skill_shielding_tries')->default(10)->nullable(false);
            $table->unsignedBigInteger('skill_fishing_tries')->default(10)->nullable(false);
            //$table->foreign('account_id')->on('accounts')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
