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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->foreignId('discount_id')->nullable()->constrained();
            $table->decimal('gross_amount', 12, 2);
            $table->string('customer_name');
            $table->integer('table_number');
            $table->enum('status', ['Dipesan', 'Diproses', 'Dikirim', 'Selesai', 'Dibatalkan'])->default('Dipesan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
