<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToClientsTable extends Migration
{
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->unsignedBigInteger('grupo_id')->nullable();
            $table->foreign('grupo_id', 'grupo_fk_6846276')->references('id')->on('groups');
            $table->unsignedBigInteger('segmento_id')->nullable();
            $table->foreign('segmento_id', 'segmento_fk_6846277')->references('id')->on('segments');
            $table->unsignedBigInteger('clasificacion_id')->nullable();
            $table->foreign('clasificacion_id', 'clasificacion_fk_6846278')->references('id')->on('clasifications');
            $table->unsignedBigInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_6846280')->references('id')->on('statuses');
            $table->unsignedBigInteger('kam_id')->nullable();
            $table->foreign('kam_id', 'kam_fk_6846281')->references('id')->on('users');
            $table->unsignedBigInteger('ejecutivo_id')->nullable();
            $table->foreign('ejecutivo_id', 'ejecutivo_fk_6846282')->references('id')->on('users');
        });
    }
}
