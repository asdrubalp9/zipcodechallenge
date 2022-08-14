<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entities', function (Blueprint $table) {
            $table->string('d_codigo', 50);
            $table->string('d_asenta', 100);
            $table->string('d_tipo_asenta', 50);
            $table->string('D_mnpio', 50);
            $table->string('d_estado', 50);
            $table->string('d_ciudad', 50);
            $table->string('d_CP', 50);
            $table->string('c_estado', 50);
            $table->string('c_oficina', 50);
            $table->string('c_CP', 50);
            $table->string('c_tipo_asenta', 50);
            $table->string('c_mnpio', 50);
            $table->string('id_asenta_cpcons', 50);
            $table->string('d_zona', 50);
            $table->string('c_cve_ciudad', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entities');
    }
}
