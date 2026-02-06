<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('category', ['packaging', 'branding']);
            $table->text('description');
            $table->decimal('base_price', 10, 2);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('services');
    }
};