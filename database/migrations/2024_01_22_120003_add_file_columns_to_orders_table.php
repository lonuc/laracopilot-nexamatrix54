<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('format')->nullable()->after('quantity');
            $table->json('uploaded_files')->nullable()->after('specifications');
            $table->string('customer_name')->nullable()->after('client_id');
            $table->string('customer_email')->nullable()->after('customer_name');
            $table->string('customer_phone')->nullable()->after('customer_email');
        });
    }
    
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn(['format', 'uploaded_files', 'customer_name', 'customer_email', 'customer_phone']);
        });
    }
};