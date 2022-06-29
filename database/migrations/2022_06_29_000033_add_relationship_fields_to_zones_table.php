<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToZonesTable extends Migration
{
    public function up()
    {
        Schema::table('zones', function (Blueprint $table) {
            $table->unsignedBigInteger('place_id')->nullable();
            $table->foreign('place_id', 'place_fk_6841309')->references('id')->on('places');
        });
    }
}
