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
<<<<<<< HEAD:my-gym/database/migrations/2024_11_09_052018_add_roll_to_users_table.php
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('member');
=======
        Schema::create('sceduled_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instructor_id')->constrained('users');
            $table->foreingId('class_type_id')->constrained();
            $table->datetime('date_time');
            $table->timestamps();
>>>>>>> 7c88cca106d68df71602afb1580bf5e0a5522a3f:my-gym/database/migrations/2024_11_08_185502_create_sceduled_classes_table.php
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};
