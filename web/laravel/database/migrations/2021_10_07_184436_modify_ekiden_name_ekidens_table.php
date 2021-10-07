<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyEkidenNameEkidensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ekidens', function (Blueprint $table) {
            // null許容していたカラムをNot Nullに変更する
            $table->string('ekiden_name', 40)->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ekidens', function (Blueprint $table) {
            // 変更を元に戻す
            $table->string('ekiden_name')->nullable();
        });
    }
}
