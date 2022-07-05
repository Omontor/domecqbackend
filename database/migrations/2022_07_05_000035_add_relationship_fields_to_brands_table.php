<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToBrandsTable extends Migration
{
    public function up()
    {
        Schema::table('brands', function (Blueprint $table) {
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->foreign('categoria_id', 'categoria_fk_6841298')->references('id')->on('product_categories');
        });
    }
}
