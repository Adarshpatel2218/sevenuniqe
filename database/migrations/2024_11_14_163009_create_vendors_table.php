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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();;
            $table->string('name');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('password');
            $table->string('login_password');
            $table->integer('virtual_commission')->nullable(); 
            $table->integer('payout_commission')->nullable(); 
            $table->integer('upi_commission')->nullable(); 
            $table->integer('distributor_name')->nullable(); 
            $table->integer('role_type')->nullable(); 
            $table->json('permissions')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vendors');
    }

};
