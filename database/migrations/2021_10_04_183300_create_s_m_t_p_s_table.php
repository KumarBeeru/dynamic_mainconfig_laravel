<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSMTPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smtps', function (Blueprint $table) {
            $table->id();
            $table->string("site_name");
            $table->string("smtp_driver");
            $table->string("smtp_host");
            $table->string("smtp_port");
            $table->string("username");
            $table->string("password");
            $table->string("from_name");
            $table->string("encription");
            $table->string("from_mail");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('smtps');
    }
}
