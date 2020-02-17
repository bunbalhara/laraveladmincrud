<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesUploadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files_upload', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('file_name', 100)->nullable();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE files_upload ENGINE=MyISAM AUTO_INCREMENT=564 DEFAULT CHARSET=latin1;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files_upload');
    }
}
