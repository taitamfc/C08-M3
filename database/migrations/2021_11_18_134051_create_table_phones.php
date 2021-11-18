<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePhones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->bigIncrements('id');//bigIncrements => bigInt(20)

            $table->string('phone',255);
            //user_id => bigInt
            $table->unsignedBigInteger('user_id');

            //make foreignkey user_id reference to users.id
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::table('table_phones', function (Blueprint $table) {
            $table->dropForeign('table_phones_user_id_foreign');
        });
        Schema::dropIfExists('table_phones');
    }
}
