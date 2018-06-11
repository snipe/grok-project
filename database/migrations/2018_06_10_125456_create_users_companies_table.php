<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('users_companies_invites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('invited_email');
            $table->string('invited_name');
            $table->integer('company_id');
            $table->string('invite_token');
            $table->string('invite_role');
            $table->dateTime('accepted_at');
            $table->timestamps();
        });

        Schema::create('users_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('company_id');
            $table->string('user_role');
            $table->timestamps();
        });

        Schema::create('users_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('project_id');
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
        Schema::dropIfExists('users_companies_invites');
        Schema::dropIfExists('users_companies');
        Schema::dropIfExists('users_projects');
    }
}
