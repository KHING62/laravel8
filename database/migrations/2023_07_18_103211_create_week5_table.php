<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeek5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('week5', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('number')->nullable();          
            $table->float('PP')->nullable();     
            $table->string('ad')->nullable();          
            $table->date('sql')->nullable(); 
            $table->text('Name')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('week5');
    }
}
