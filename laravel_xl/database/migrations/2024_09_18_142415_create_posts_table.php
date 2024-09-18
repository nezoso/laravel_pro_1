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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('text');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('img')->nullable();
            $table->boolean('is_active')->default(0);
            $table->enum('status',['unread','read'])->default('unread')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('token');
            $table->integer('code')->default(0)->nullable()->unique();
            $table->integer('view_count')->default(0);
            $table->BigInteger('price');
            $table->enum('pay_status',['paid','unpaid','prepration']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
