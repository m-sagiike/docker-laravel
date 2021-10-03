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
            $table->tinyInteger('ekiden_id')->nullable()->comment('駅伝マスタID');
            $table->tinyInteger('members_id')->nullable()->comment('部員マスタID');
            $table->integer('display_order')->nullable()->comment('区間');
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
