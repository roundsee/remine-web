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
        Schema::create('paket', function (Blueprint $table) {
            $table->increments('id');
            $table->string('paketname', 45);
            $table->string('price', 45)->nullable();
            $table->mediumText('paketnote')->nullable();
            $table->timestamps(); // Optional: Adds created_at and updated_at columns
            $table->index('paketname'); // Adding index to paketname column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket');
    }
};
