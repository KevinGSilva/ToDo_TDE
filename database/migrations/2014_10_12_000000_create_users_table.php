<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();            
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');            
            $table->string('document_cpf', 20)->nullable();
            $table->string('document_cnpj', 20)->nullable();            
            $table->string('phone', 25)->nullable();
            $table->string('phone_mobile', 25)->nullable();
            $table->string('phone_whatsapp', 25)->nullable();
            $table->string('state', 2)->nullable();
            $table->string('city')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('street')->nullable();
            $table->string('number')->nullable();
            $table->string('zipcode', 10)->nullable();
            $table->string('complement')->nullable();            
            $table->foreignId('created_by')->nullable()->constrained('users');            
            $table->boolean('archived')->default(false);
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
