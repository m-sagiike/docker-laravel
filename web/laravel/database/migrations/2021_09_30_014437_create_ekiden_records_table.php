<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEkidenRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ekiden_records', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->tinyInteger('ekiden_id')->nullable();
            $table->tinyInteger('university_id')->nullable();
            $table->time('record', $precision = 0);
            $table->time('outbound_record', $precision = 0);
            $table->time('return_trip_record', $precision = 0);
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ekiden_records');
    }
}
