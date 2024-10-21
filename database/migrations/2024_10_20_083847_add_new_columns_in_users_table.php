<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('mobile_no')->after('name')->nullable();
            $table->string('user_name')->after('mobile_no')->nullable();
            $table->string('address')->after('user_name')->nullable();
            $table->string('gender')->after('address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
           $table->dropcolumn(['mobile_no.','username','address','gender']);
        });
    }
};
