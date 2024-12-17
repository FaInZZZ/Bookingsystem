<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('bookingdatas', function (Blueprint $table) {
        $table->dropUnique('bookingdata_email_unique'); // Correct index name
    });
}

public function down()
{
    Schema::table('bookingdatas', function (Blueprint $table) {
        $table->unique('email'); // Re-add the unique constraint
    });
}

};

