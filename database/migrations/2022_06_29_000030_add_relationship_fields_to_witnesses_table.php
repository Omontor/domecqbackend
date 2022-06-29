<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToWitnessesTable extends Migration
{
    public function up()
    {
        Schema::table('witnesses', function (Blueprint $table) {
            $table->unsignedBigInteger('witness_category_id')->nullable();
            $table->foreign('witness_category_id', 'witness_category_fk_6840243')->references('id')->on('witness_categories');
        });
    }
}
