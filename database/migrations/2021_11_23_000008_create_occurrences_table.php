<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccurrencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Occurences created by Users
         */
        Schema::create('occurrences', function (Blueprint $table) {
            $table->id();                                   //occurence id
            $table->string('occurrence_title');             //occurence title
            $table->text('occurrence_description');         //occurence description
            $table->boolean('is_deleted')->default(false);  //is occurrence deleted ? default: no
            //FK - users table
            $table->foreignId('user_id')->constrained();                            //user that registered the occurrence
            //FK - resolution_states table
            $table->foreignId('resolution_state_id')->default(1)->constrained();    //default: 'Not resolved'
            //FK - companies table
            $table->foreignId('company_id')->default(2)->constrained();             //default: Dashboard company
            $table->timestamps();                           //occurence create/update time
            $table->timestamp('deleted_at')->nullable();    //occurrence delete time
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('occurrences');
    }
}
