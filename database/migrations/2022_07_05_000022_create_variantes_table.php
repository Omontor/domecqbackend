<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariantesTable extends Migration
{
    public function up()
    {
        Schema::create('variantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('producto')->unique();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
