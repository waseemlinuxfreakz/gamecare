<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->string('tournament_id')->nullable();
            $table->string('name');
            $table->string('featured_image')->nullable();
            $table->string('game_id');
            $table->string('region');
            $table->string('status');
            $table->boolean('custom')->default(false);
            $table->string('invite_type');
            $table->string('prize_type');
            $table->string('total_prize')->nullable();
            $table->unsignedInteger('team_size');
            $table->integer('min_skill');
            $table->integer('max_skill');
            $table->string('match_type');
            $table->uuid('organizer_id');
            $table->json('whitelist_countries')->nullable();
            $table->string('membership_type');
            $table->integer('number_of_players');
            $table->integer('number_of_players_joined')->default(0);
            $table->integer('number_of_players_checkedin')->default(0);
            $table->integer('number_of_players_participants')->default(0);
            $table->boolean('anticheat_required')->default(false);
            $table->integer('started_at');
            $table->integer('subscriptions_count')->default(0);
            $table->string('faceit_url');
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
        Schema::dropIfExists('tournaments');
    }
}
