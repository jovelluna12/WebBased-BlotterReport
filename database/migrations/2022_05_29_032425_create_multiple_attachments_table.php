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
        Schema::dropIfExists('multiple_attachments');
        Schema::create('multiple_attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('reportid');
            $table->unsignedBigInteger('senderID');
            $table->foreign('senderID')->references('Reporter_id')->on('reports');
            $table->foreign('reportid')->references('id')->on('reports');
            $table->string('attachment');
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
        Schema::dropIfExists('multiple_attachments');
    }
};