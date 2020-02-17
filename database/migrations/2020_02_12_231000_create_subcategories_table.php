<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id')->default(1);
            $table->string('sub_category_name',255);
            $table->integer('sub_category_order')->default(1);
            $table->integer('sub_category_status')->default(1);
            $table->boolean('enabledForFreeUsers')->default(1);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
        DB::statement('ALTER TABLE subcategories ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=latin1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategories');
    }
}
