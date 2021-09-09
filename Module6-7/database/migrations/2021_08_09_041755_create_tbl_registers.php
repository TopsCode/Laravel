<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblRegisters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_registers', function (Blueprint $table) {
            $table->increments('rid');
            //upload you images here
            $table->string('photo');
            $table->string('firstname',100);
            $table->string('lastname',100);
            $table->string('username',100);
            $table->string('email',200);
            $table->string('password',100);
            $table->string('gender',100);
            $table->bigInteger('mobile');
            $table->text('address');

            // $table->integer('cid');
            // $table->integer('sid');
            // $table->integer('ctid');
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
        Schema::dropIfExists('tbl_registers');
    }
}
