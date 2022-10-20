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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('surname')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('email')->unique();
            $table->string('phone_no')->nullable();
            $table->string('address_line_no_one')->nullable();
            $table->string('address_line_no_two')->nullable();
            $table->string('post_code')->nullable();
            $table->string('state')->nullable();
            $table->string('area')->nullable();
            $table->string('education')->nullable();
            $table->string('country')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
