<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKycAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kyc_apps', function (Blueprint $table) {
            $table->id();
            $table->integer('user');
            $table->integer('status')->default(0);
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->string('phone');
            $table->date('birth');
            $table->string('country');
            $table->longText('adress1');
            $table->longText('adress2');
            $table->string('city');
            $table->string('zip');
            $table->integer('image_type');
            $table->string('image1');
            $table->string('image2');
            $table->integer('wallet')->nullable();
            $table->longText('wallet_code')->nullable();
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
        Schema::dropIfExists('kyc_apps');
    }
}
