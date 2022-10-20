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
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('ip_address')->nullable();
             $table->string('mac_address')->nullable();

             $table->string('messenger')->nullable();
            $table->string('telegram')->nullable();

            $table->string('reddit')->nullable();
            $table->string('quora')->nullable();
            $table->string('skype')->nullable();
            $table->string('viber')->nullable();
            $table->string('line')->nullable();

            $table->string('spotify')->nullable();
            $table->string('amazon')->nullable();

            $table->string('vimeo')->nullable();
            $table->string('eagle')->nullable();
            $table->string('locaiton')->nullable();
            $table->string('house')->nullable();


            $table->string('message')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('whatsapp')->nullable();

            $table->string('heart')->nullable();
            $table->string('phone')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('pinterest')->nullable();
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
        Schema::dropIfExists('statistics');
    }
};
