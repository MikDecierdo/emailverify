<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['student_id', 'first_name', 'last_name', 'phone', 'birthday', 'gender', 'address', 'strand', 'program', 'notes']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('student_id')->nullable()->after('id');
            $table->string('first_name')->nullable()->after('student_id');
            $table->string('last_name')->nullable()->after('first_name');
            $table->string('phone')->nullable()->after('email');
            $table->date('birthday')->nullable()->after('phone');
            $table->string('gender')->nullable()->after('birthday');
            $table->string('address')->nullable()->after('gender');
            $table->string('strand')->nullable()->after('address');
            $table->string('program')->nullable()->after('strand');
            $table->text('notes')->nullable()->after('program');
        });
    }
};
