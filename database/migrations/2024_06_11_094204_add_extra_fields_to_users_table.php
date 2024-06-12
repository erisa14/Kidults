<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('negozio')->after('email'); 
            $table->string('lastname')->after('negozio'); 
            $table->date('date')->after('lastname');
        });
    }

   
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['negozio', 'lastname', 'date']);

        });
    }
};
