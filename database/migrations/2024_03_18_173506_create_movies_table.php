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
        Schema::create('movies', function (Blueprint $table) {



            $table->id();
            $table->string('Title', 100);
            $table->text('Description');
            $table->string('Thumb');
            $table->decimal('Price',8,2);
            $table->string('Series')->nullable();
            $table->date('Sale_date');
            $table->string('Type');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
