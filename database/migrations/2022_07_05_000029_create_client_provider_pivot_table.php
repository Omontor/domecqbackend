<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientProviderPivotTable extends Migration
{
    public function up()
    {
        Schema::create('client_provider', function (Blueprint $table) {
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id', 'client_id_fk_6846438')->references('id')->on('clients')->onDelete('cascade');
            $table->unsignedBigInteger('provider_id');
            $table->foreign('provider_id', 'provider_id_fk_6846438')->references('id')->on('providers')->onDelete('cascade');
        });
    }
}
