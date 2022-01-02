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
            $table->id();                                   //user id
            $table->string('first_name');                   //user first name
            $table->string('last_name');                    //user last name
            $table->string('email')->unique();              //user email
            $table->string('phone');                        //user phone
            $table->string('profession');                   //user profession
            $table->string('password');                     //user password
            $table->boolean('is_deleted')->default(false);  //is user deleted ? default: no
            //FK - user_roles table
            $table->foreignId('user_role_id')->default(4)->constrained();   //default: role: 'Colaborador'
            //FK - user_images table
            $table->foreignId('user_image_id')->default(1)->constrained();  //default: User profile image
            //FK - departments table
            $table->foreignId('department_id')->default(1)->constrained();  //default: 'A definir'
            //FK - companies table
            $table->foreignId('company_id')->default(2)->constrained();     //default: Main company
            //$table->rememberToken();
            //$table->timestamp('email_verified_at')->nullable();
            $table->timestamps();                           //user create/update time
            $table->timestamp('deleted_at')->nullable();    //user delete time
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
