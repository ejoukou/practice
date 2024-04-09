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
        Schema::create('rows', function (Blueprint $table) {

            $table->id('num');
            $table->string('direction');
            $table->string('protocol');
            $table->string('description');
            $table->string('port_range_max');
            $table->string('updated_at');
            $table->string('revision_number');
            $table->string('id');
            $table->string('remote_group_id')->nullable();
            $table->string('remote_ip_prefix')->nullable();
            $table->string('created_at');
            $table->string('security_group_id');
            $table->string('tenant_id');
            $table->string('port_range_min');
            $table->string('ethertype');
            $table->string('project_id');
            $table->string('port_range');
            $table->string('ip_range');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rows');
    }
};
