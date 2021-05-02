<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicInfoSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_info_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo');
            $table->string('favicon');
            $table->string('title');
            $table->string('phone');
            $table->string('email');
            $table->string('fb_link');
            $table->string('youtube_link');
            $table->string('linkedin_link');
            $table->string('address');
            $table->string('copywright_text');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('deleted_by')->nullable();
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
        Schema::dropIfExists('basic_info_settings');
    }
}
