<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * User
         */
        Schema::create('users', function (Blueprint $table) {
            $table->id(); //user id
            $table->string('name'); //user complete name
            $table->string('email')->unique(); //user email
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone'); //user phone
            $table->string('image')->default('');//user photo
            $table->string('password'); //user password
            $table->boolean('is_deleted')->default(false); //is user deleted ?
            //FK - roles table
            $table->foreignId('user_role_id')->default(4)->constrained();  //default: 'Colaborador'
            //FK - departments table
            $table->foreignId('department_id')->default(1)->constrained(); // default: 'A definir'
            //FK - companies table
            $table->foreignId('company_id')->default(2)->constrained(); // default: Main company
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
