<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestcasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_cases', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('auth_status')->default(0);
            $table->string('auth_as_user')->nullable()->default(null);
            $table->string('am_on')->nullable()->default(null);
            $table->string('url')->nullable()->default(null);
            $table->text('action')->nullable()->default(null);
            $table->text('element')->nullable()->default(null);
            $table->text('should_see')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->integer('requirement_id');
            $table->integer('user_id');
            $table->integer('ordering')->default(0);
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
        Schema::dropIfExists('test_cases');
    }
}
