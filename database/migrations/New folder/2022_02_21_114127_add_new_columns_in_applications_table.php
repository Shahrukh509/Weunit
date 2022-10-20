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
        Schema::table('applications', function (Blueprint $table) {
            $table->string('weixin')->after('messenger')->nullable();
            $table->string('qq')->after('telegram')->nullable();
            $table->string('weibo')->after('qq')->nullable();


            $table->string('discord')->after('line')->nullable();
            $table->string('twitch')->after('discord')->nullable();
            $table->string('xing')->after('twitch')->nullable();

            $table->string('paypal')->after('vimeo')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            //
        });
    }
};
