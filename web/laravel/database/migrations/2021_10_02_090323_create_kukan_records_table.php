<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKukanRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kukan_records', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->tinyInteger('ekiden_id')->nullable();
            $table->tinyInteger('members_id')->nullable();
            $table->tinyInteger('display_order')->nullable();
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
        Schema::dropIfExists('kukan_records');
    }
}
