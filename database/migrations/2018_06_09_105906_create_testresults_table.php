<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestresultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('browser')->nullable()->default(null);
            $table->string('browser_version')->nullable()->default(null);
            $table->string('browser_meta')->nullable()->default(null);
            $table->string('os')->nullable()->default(null);
            $table->string('url')->nullable()->default(null);
            $table->string('auth_status')->nullable()->default(null);
            $table->string('am_on')->nullable()->default(null);
            $table->text('action')->nullable()->default(null);
            $table->text('did_see')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->decimal('pageload_time', 3,3)->nullable()->default(null);
            $table->integer('requirement_id');
            $table->integer('user_id');
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
        Schema::dropIfExists('test_results');
    }
}
