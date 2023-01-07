<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerSlidersTable extends Migration
{
    public function up()
    {
        Schema::create('banner_sliders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('text');
            $table->boolean('is_have_button_link')->default(0);
            $table->text('button_link')->nullable();
            $table->string('publish_status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
