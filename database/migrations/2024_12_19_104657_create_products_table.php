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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description'); // default xolatta pruducttni nameni yozib ketish kerak
            $table->bigInteger('price'); // kiritilgan maxsulot pulini qoldiqlari bilan kopaytirib qoshiladi
            $table->integer('stock_quantity');
            $table->string('image_url')->nullable();
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
