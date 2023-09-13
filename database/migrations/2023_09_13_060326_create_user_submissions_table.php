<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('event_id');
            $table->enum('status', ['Pending', 'Ongoing', 'Done'])->default('Pending');
            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');


        });
    }

    public function down()
    {
        Schema::dropIfExists('user_submissions');
    }



};
