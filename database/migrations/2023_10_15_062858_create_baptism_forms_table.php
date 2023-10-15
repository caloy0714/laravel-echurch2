<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaptismFormsTable extends Migration
{
    public function up()
    {
        Schema::create('baptism_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_child');
            $table->string('place_of_birth');
            $table->string('father');
            $table->string('father_place_of_birth');
            $table->string('mother');
            $table->string('mother_place_of_birth');
            $table->string('kind_of_union');
            $table->date('date_of_birth');
            $table->date('date_of_baptism');
            $table->string('godfather');
            $table->string('residence_of_godfather');
            $table->string('godmother');
            $table->string('residence_of_godmother');
            $table->text('other_sponsors')->nullable();
            $table->string('status')->default('Pending'); // New field
            $table->text('message')->nullable(); // New field
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('baptism_forms');
    }
};

