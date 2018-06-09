<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestenvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_envs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('env_type')->nullable()->default(null);
            $table->string('browser')->nullable()->default(null);
            $table->string('browser_version')->nullable()->default(null);
            $table->string('os')->nullable()->default(null);
            $table->string('os_version')->nullable()->default(null);
            $table->integer('company_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_envs');
    }
}
