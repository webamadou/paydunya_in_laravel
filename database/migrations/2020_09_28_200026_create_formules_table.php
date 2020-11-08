<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formules', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("title");
            $table->integer("price");
            $table->string("nbr_user");
            $table->integer("storage")->nullable(true)->default(2);
            $table->integer("email_support")->nullable(true);
            $table->integer("help_center")->nullable(true);
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
        Schema::dropIfExists('formules');
    }
}
