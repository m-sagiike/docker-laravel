<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyKukanRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kukan_records', function (Blueprint $table) {
            // カラム名変更
            $table->renameColumn('display_order', 'section_order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kukan_records', function (Blueprint $table) {
            // 元のカラム名に戻す
            $table->renameColumn('section_order', 'display_order');
        });
    }
}
