<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('dimensions')->nullable()->after('format');
            $table->string('carton_type')->nullable()->after('dimensions');
            $table->json('finishes')->nullable()->after('carton_type');
        });
    }
    
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['dimensions', 'carton_type', 'finishes']);
        });
    }
};