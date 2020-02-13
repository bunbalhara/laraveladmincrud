<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNosimGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nosim_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('subcat_id')->default(0);
            $table->string('name',255);
            $table->integer('ord')->default(0);
            $table->timestamps();
        });
        DB::statement('ALTER TABLE nosim_groups ENGINE=InnoDB AUTO_INCREMENT=602 DEFAULT CHARSET=latin1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nosim_groups');
    }
}
