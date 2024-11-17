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
        Schema::create('pc_device_info', function (Blueprint $table) {
            $table->id();
            $table->string('ubtzNum')->unique();
            $table->string('regNum')->unique();
            $table->string('serviceTag')->unique();
            $table->string('brand');
            $table->string('mark');
            $table->string('orgName');
            $table->string('workplaceName');
            $table->string('positionName');
            $table->string('ownerName');
            $table->string('osType');
            $table->string('cpu');
            $table->string('ram');
            $table->string('hard');
            $table->string('price');
            $table->date('buyedDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pc_device_info');
    }
};