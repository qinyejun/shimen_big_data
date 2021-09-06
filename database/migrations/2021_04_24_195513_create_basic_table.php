<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable()->comment('网站名称');
            $table->string('pc_host', 200)->nullable()->comment('PC域名');
            $table->string('mobile_host', 200)->nullable()->comment('移动域名');
            $table->string('site_water_img_src', 200)->nullable()->comment('水印图片');
            $table->string('site_water_img_position')->nullable()->comment('水印位置');
            $table->text('statistic_code')->nullable()->comment('统计代码');
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
        Schema::dropIfExists('basic');
    }
}
