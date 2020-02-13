<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNosimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nosims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nose_sub_category_id');
            $table->integer('nose_group_id')->default(0);
            $table->string('nose_name',255);
            $table->integer('nose_status')->default(1);
            $table->integer('nose_order')->default(1);
            $table->timestamps();
        });
        DB::statement('ALTER TABLE nosims ENGINE=InnoDB AUTO_INCREMENT=2055 DEFAULT CHARSET=latin1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nosims');
    }
}
