<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('reports', function (Blueprint $table) {

            $table->unsignedbigInteger('id');
            $table->unsignedBigInteger('Reporter_id');
            $table->primary('id');
            $table->foreign('Reporter_id')->references('id')->on('users');
            // $table->foreign('name')->references('name')->on('users');
            // $table->('email_address');
            // $table->string('contact_number');
            $table->string('reportdescription');
            $table->string('status');
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
        Schema::dropIfExists('reports');
    }
};
