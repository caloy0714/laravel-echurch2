<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToBaptismForms extends Migration
{
    public function up()
    {
        Schema::table('baptism_forms', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
        });
    }

    public function down()
    {
        Schema::table('baptism_forms', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
}

