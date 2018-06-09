<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image')->nullable()->default(null);
            $table->integer('company_id')->nullable()->default(null);
            $table->string('slug')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->integer('user_id');
            $table->string('dev_url')->nullable()->default(null);
            $table->string('staging_url')->nullable()->default(null);
            $table->string('prod_url')->nullable()->default(null);
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
        Schema::dropIfExists('projects');
    }
}
