<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToVisitReportsTable extends Migration
{
    public function up()
    {
        Schema::table('visit_reports', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_6893384')->references('id')->on('users');
            $table->unsignedBigInteger('client_id')->nullable();
            $table->foreign('client_id', 'client_fk_6893385')->references('id')->on('clients');
            $table->unsignedBigInteger('checkin_id')->nullable();
            $table->foreign('checkin_id', 'checkin_fk_6893386')->references('id')->on('checkins');
            $table->unsignedBigInteger('checkout_id')->nullable();
            $table->foreign('checkout_id', 'checkout_fk_6893387')->references('id')->on('checkouts');
        });
    }
}
