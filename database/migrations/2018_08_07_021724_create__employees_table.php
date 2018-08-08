<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->char('family_name',100);
            $table->char('given_name',100);
            $table->char('family_name_kana',100);
            $table->char('given_name_kana',100);
            $table->char('beacon_id',100)->nullable();
            $table->char('division_id',100)->nullable();
            $table->date('birthday')->nullable();
            $table->date('hire_date')->nullable();
            $table->char('position',100)->nullable();
            $table->timestamp('positioned_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_employees');
    }
}



