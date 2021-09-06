<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePushSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('push_setting', function (Blueprint $table) {
            $table->id();
            $table->string('type', 100)->nullable()->comment('推送方式');
            $table->string('bd_putong_token', 150)->nullable()->comment('百度普通推送token');
            $table->string('bd_quick_token', 150)->nullable()->comment('百度快速推送token');
            $table->string('shenma_api', 150)->nullable()->comment('神马API');
            $table->string('push_host', 150)->nullable()->comment('推送域名');
            $table->integer('is_update_push')->nullable()->comment('添加更新数据推送');
            $table->integer('is_crawler_push')->nullable()->comment('采集更新添加推送');
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
        Schema::dropIfExists('push_setting');
    }
}
