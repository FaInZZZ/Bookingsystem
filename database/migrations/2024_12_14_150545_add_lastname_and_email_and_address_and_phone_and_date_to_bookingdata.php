<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('bookingdata', function (Blueprint $table) {
            $table->string('lastname')->after('firstname');  // Add a lastname column
            $table->string('email')->unique()->after('lastname');  // Add an email column
            $table->string('address')->nullable()->after('email');  // Add an address column
            $table->string('phone', 15)->nullable()->after('address');  // Add a phone column
            $table->date('date')->nullable()->after('phone');  // Add a date column
        });
    }
    
    public function down()
    {
        Schema::table('bookingdata', function (Blueprint $table) {
            $table->dropColumn(['lastname', 'email', 'address', 'phone', 'date']);  // Remove added columns
        });
    }
    
};
