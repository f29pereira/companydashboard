<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Relations between companies
         */
        Schema::create('company_types', function (Blueprint $table) {
            $table->id();                                   //company type id
            $table->string('type_name');                    //company type name
            $table->string('type_description');             //company type description
            $table->boolean('is_deleted')->default(false);  //is company type deleted ?
            $table->timestamps();                           //company type create/update time
            $table->timestamp('deleted_at')->nullable();    //company type delete time
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_types');
    }
}
