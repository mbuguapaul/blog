<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('updates', function (Blueprint $table) {
            $table->increments('id');
             $table->string('userid');
             $table->integer('updateid')->default(1);

             $table->string('title1')->default('title 1 customizable');
             $table->string('title2')->default('title 2 customizable');
             $table->string('title3')->default('title 3 customizable');

             $table->string('desc1')->default('description 1 image 350*250');
             $table->string('desc2')->default('description 2 image 350*250');
             $table->string('desc3')->default('description 3 image 350*250');

             $table->string('img1')->default('default1.jpg');
             $table->string('img2')->default('default2.jpg');
             $table->string('img3')->default('default3.jpg');


            
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
        Schema::dropIfExists('updates');
    }
}
