<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('name');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->float('wallet')->default(0);
            $table->string('wallet_code')->nullable();
            $table->string('referance_user')->nullable();
            $table->string('referance_code')->nullable();
            $table->integer('type')->default(0);
            $table->string('kyc')->default(0); // onaylanmamış
            $table->string('phone')->nullable();
            $table->date('birth')->nullable();
            $table->string('country')->nullable();
            $table->longText('adress1')->nullable();
            $table->longText('adress2')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->integer('image_type')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
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
}
