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
        if (!Schema::hasTable('instruments')) {
            Schema::create('instruments', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('brand');
                $table->decimal('price', 10, 2);
                $table->text('description');
                $table->string('image');
                $table->string('type');
                $table->unsignedInteger('stock')->default(0);
                // $table->timestamps();
            });
        } elseif (!Schema::hasColumn('instruments', 'stock')) {
            Schema::table('instruments', function (Blueprint $table) {
                $table->unsignedInteger('stock')->default(0)->after('type');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instruments');
    }
};
