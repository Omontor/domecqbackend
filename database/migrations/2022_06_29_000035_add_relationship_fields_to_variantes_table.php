<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToVariantesTable extends Migration
{
    public function up()
    {
        Schema::table('variantes', function (Blueprint $table) {
            $table->unsignedBigInteger('marca_id')->nullable();
            $table->foreign('marca_id', 'marca_fk_6841304')->references('id')->on('brands');
        });
    }
}
