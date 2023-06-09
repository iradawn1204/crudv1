<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Consumers; 
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('consumers',function(Blueprint $table){
         
        $table->id();
        $table->string('name');
        $table->string('age');
        $table->string('address');
        $table->string('email');
        $table->string('contactNumber');
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
        Schema::dropIfExists('consumers');
    }
};
