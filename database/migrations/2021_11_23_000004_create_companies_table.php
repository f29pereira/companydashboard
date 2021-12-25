<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Companies
         */
        Schema::create('companies', function (Blueprint $table) {
            $table->id();                                   //company id
            $table->string('company_name');                 //company name
            $table->text('company_description');            //company description
            $table->string('sector');                       //company activity sector
            $table->string('company_phone');                //company phone
            $table->string('headquarters');                 //company location
            $table->string('website');                      //company website link
            $table->boolean('is_deleted')->default(false);  //is company deleted ?
            //FK - company types
            $table->foreignId('company_types_id')->constrained();
            $table->timestamps();                           //company create/update time
            $table->timestamp('deleted_at')->nullable();    //company delete time
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
