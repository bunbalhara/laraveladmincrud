<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nose_id');
            $table->string('articleTitle',255);
            $table->text('articleShort');
            $table->text('articleLong');
            $table->text('articleNoHide');
            $table->timestamp('articleDate')->useCurrent();
            $table->integer('writerId')->default(1);
            $table->integer('articleOrder')->default(1);
            $table->integer('articleStatus')->default(1);
            $table->integer('type')->default(1);
            $table->timestamps();
            $table->foreign('nose_id')->references('id')->on('nosims')->onDelete('cascade');
        });
        DB::statement("ALTER TABLE articles ENGINE=InnoDB AUTO_INCREMENT=2337 DEFAULT CHARSET=latin1");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
