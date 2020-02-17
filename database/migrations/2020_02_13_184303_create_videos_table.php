<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nose_id')->nullable();
            $table->string('title',255)->nullable();
            $table->text('shortDesc')->nullable();
            $table->string('videoUrl',266)->nullable();
            $table->integer('order')->default(1);
            $table->integer('videoType')->default(1);
            $table->integer('active')->default(1);
            $table->foreign('nose_id')->references('id')->on('nosims')->onDelete('cascade');
            $table->timestamps();
        });
        DB::statement('ALTER TABLE videos ENGINE=InnoDB AUTO_INCREMENT=18626 DEFAULT CHARSET=latin1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
