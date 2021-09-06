<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDateDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('date_detail', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250)->nullable()->comment('名称');
            $table->string('url', 50)->nullable()->comment('地址');
            $table->integer('date_type_id')->nullable()->comment('时间类型ID');
            $table->integer('column_id')->nullable()->comment('栏目ID');
            $table->string('date', 50)->nullable()->comment('日期');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('date_detail');
    }
}
