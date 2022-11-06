<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->longText('detail')->nullable();
            $table->longText('location');
            $table->datetime('date');
            $table->string('publish_status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
