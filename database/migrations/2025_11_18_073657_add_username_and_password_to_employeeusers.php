<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsernameAndPasswordToEmployeeusers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employeeusers', function (Blueprint $table) {
      $table->string('username')->unique()->nullable()->default(null)->after('employ_id');
$table->string('password')->nullable()->default(null)->after('username');
    });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employeeusers', function (Blueprint $table) {
             $table->dropColumn(['username', 'password']);
        });
    }
}
