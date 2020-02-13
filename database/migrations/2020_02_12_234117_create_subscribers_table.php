<?php


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email', 80)->unique()->nullable();
            $table->string('pass',20);
            $table->string('full_name',200)->nullable();
            $table->string('phone',30)->nullable();
            $table->integer('city')->nullable();
            $table->integer('access_to_category');
            $table->integer('class_id')->default(1);
            $table->integer('subscriber_type')->default(2);
            $table->string('invoiceadress',255)->nullable();
            $table->integer('cc_from_tranzila')->default(0);
            $table->integer('active'                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  )->default(1);
            $table->timestamp('reg_date')->useCurrent();
            $table->string('last_seen',50)->default(0);
            $table->string('lowprofilecode',100)->nullable();
            $table->string('coupon',10)->nullable();
            $table->integer('level')->nullable();
            $table->integer('testsType1PassedAmount')->default(0);
            $table->integer('testsType2PassedAmount')->default(0);
            $table->integer('articlesWatchedAmount')->default(0);
            $table->integer('videosWatchedAmount')->default(0);
            $table->integer('upgradeLevel')->default(0);
            $table->timestamp('upgradeTime')->nullable();
            $table->string('upgradeLowProfileCode',100)->nullable();
            $table->string('verificationHash',32)->nullable();
            $table->timestamps();
        });
        DB::statement('ALTER TABLE subscribers ENGINE=MyISAM DEFAULT CHARSET=latin1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscribers');
    }
}
