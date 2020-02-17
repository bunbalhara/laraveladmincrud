<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogposts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('postUrl',500);
            $table->unsignedBigInteger('sub_category_id');
            $table->string('title',300);
            $table->string('thumbnail',500);
            $table->timestamps();
            $table->foreign('sub_category_id')->references('id')->on('subcategories')->onDelete('cascade');
        });
        DB::statement("ALTER TABLE blogposts ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogposts');
    }
}
