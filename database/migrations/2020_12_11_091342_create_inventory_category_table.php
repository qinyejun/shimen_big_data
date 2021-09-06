<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_category', function (Blueprint $table) {
            $table->id();
            $table->string('path', 100)->nullable()->comment('路径');
            $table->string('label', 30)->nullable()->comment('名称');
            $table->integer('level')->comment('层级');
            $table->integer('sort')->comment('排序号');
            $table->integer('is_root')->comment('是否根节点');
            $table->integer('is_open')->comment('是否开启');
            $table->string('img_url', 100)->nullable()->comment('分类图标');
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
        Schema::dropIfExists('inventory_category');
    }
}
