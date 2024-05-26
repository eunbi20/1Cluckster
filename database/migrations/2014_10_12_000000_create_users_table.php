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
        Schema::create('tbusers', function (Blueprint $table) {
            $table->id('users_id')->unique();
            $table->string('name');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('tbdevices', function (Blueprint $table) {
            $table->id('devices_id')->unique();
            $table->string('devices_name');
            $table->varchar('location_id');
            $table->varchar('devices_type_id');
        });
        Schema::create('tbdevices_type', function (Blueprint $table) {
            $table->id('devices_type_id')->unique();
            $table->float('devices_type');
        });
        Schema::create('tbdevices_data', function (Blueprint $table) {
            $table->id('devices_data_id')->unique();
            $table->varchar('devices_id');
            $table->float('data_value');
            $table->timestamp('taken_at');
        });
        Schema::create('tblimits', function (Blueprint $table) {
            $table->id('limits_id')->unique();
            $table->varchar('limits_id');
            $table->varchar('devices_id');
            $table->time('duration');
            $table->float('value');
            $table->boolean('is_active');
            $table->timestamp('modified_at');
        });
        Schema::create('tblocation', function (Blueprint $table) {
            $table->id('location_id')->unique();
            $table->varchar('building');
            $table->varchar('chicken_age');
            $table->varchar('user_id');
            $table->string('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbusers');

    }
};
