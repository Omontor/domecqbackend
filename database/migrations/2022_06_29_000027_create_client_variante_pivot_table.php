<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientVariantePivotTable extends Migration
{
    public function up()
    {
        Schema::create('client_variante', function (Blueprint $table) {
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id', 'client_id_fk_6846283')->references('id')->on('clients')->onDelete('cascade');
            $table->unsignedBigInteger('variante_id');
            $table->foreign('variante_id', 'variante_id_fk_6846283')->references('id')->on('variantes')->onDelete('cascade');
        });
    }
}
