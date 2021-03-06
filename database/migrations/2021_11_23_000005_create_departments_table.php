<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * User department
         */
        Schema::create('departments', function (Blueprint $table) {
            $table->id();                                   //department id
            $table->string('department_name');              //department name
            $table->boolean('is_deleted')->default(false);  //is department deleted ? default: no
            $table->timestamps();                           //department create/update time
            $table->timestamp('deleted_at')->nullable();    //department delete time
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
