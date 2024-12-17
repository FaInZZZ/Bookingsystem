<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('bookingdata', function (Blueprint $table) {
            $table->string('firstname')->after('id'); // Add 'firstname' column
        });
    }
    
    public function down()
    {
        Schema::table('bookingdata', function (Blueprint $table) {
            $table->dropColumn('firstname'); // Remove 'firstname' column
        });
    }
    
};
