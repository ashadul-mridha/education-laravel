<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topices_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('topices_id');
            $table->string('description');
            $table->string('file');
            $table->string('video_path');
            $table->string('topices_details');
            $table->string('title');
            $table->string('topic_view');
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
        Schema::dropIfExists('topices_details');
    }
}
