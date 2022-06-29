<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVarianteVisitReportPivotTable extends Migration
{
    public function up()
    {
        Schema::create('variante_visit_report', function (Blueprint $table) {
            $table->unsignedBigInteger('visit_report_id');
            $table->foreign('visit_report_id', 'visit_report_id_fk_6893391')->references('id')->on('visit_reports')->onDelete('cascade');
            $table->unsignedBigInteger('variante_id');
            $table->foreign('variante_id', 'variante_id_fk_6893391')->references('id')->on('variantes')->onDelete('cascade');
        });
    }
}
