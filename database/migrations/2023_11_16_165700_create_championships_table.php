<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('championships', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('championship_id')->nullable();
            $table->text('name')->nullable();
            $table->text('cover_image')->nullable();
            $table->text('background_image')->nullable();
            $table->text('avatar')->nullable();
            $table->text('organizer_id')->nullable();
            $table->text('description')->nullable();
            $table->string('type', 50)->nullable();
            $table->string('status', 20)->nullable();
            $table->string('game_id', 50)->nullable();
            $table->string('region', 50)->nullable();
            $table->string('featured', 10)->nullable();
            $table->string('subscription_start', 100)->nullable();
            $table->string('subscription_end', 100)->nullable();
            $table->string('checkin_start', 100)->nullable();
            $table->string('checkin_clear', 100)->nullable();
            $table->string('championship_start', 100)->nullable();
            $table->integer('slots')->default(0);
            $table->integer('current_subscriptions')->default(0);
            $table->string('anticheat_required', 10)->nullable();
            $table->text('rules_id')->nullable();
            $table->text('substitution_configuration')->nullable();
            $table->text('join_checks')->nullable();
            $table->text('full')->nullable();
            $table->string('checkin_enabled', 15)->nullable();
            $table->integer('total_rounds')->default(0);
            $table->text('schedule');
            $table->integer('total_groups')->default(0);
            $table->string('subscriptions_locked', 15)->nullable();
            $table->text('seeding_strategy')->nullable();
            $table->text('faceit_url')->nullable();
            $table->text('prizes')->nullable();
            $table->integer('total_prizes')->default(0);
            $table->text('stream')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('championships');
    }
};
