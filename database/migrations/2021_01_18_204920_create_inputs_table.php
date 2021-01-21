<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputs', function (Blueprint $table) {
            //$table->increments('id');
            $table->id();
            //$table->unsignedBigInteger('id_user');
            //$table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_id')->constrained('users');

            //$table->unsignedBigInteger('id_supplier');
            //$table->foreign('id_supplier')->references('id')->on('suppliers');

            $table->foreign('supplier_id')->constrained('suppliers');

            $table->date("date");
            $table->integer('whole');
            $table->integer('n_invoice');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inputs');
    }
}
