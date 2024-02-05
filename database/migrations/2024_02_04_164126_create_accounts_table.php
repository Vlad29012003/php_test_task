<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('company_name')->nullable();
            $table->string('position')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('phone3')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
