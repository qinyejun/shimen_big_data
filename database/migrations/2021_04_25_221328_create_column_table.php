<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('columns', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable()->comment('名称');
            $table->string('path', 100)->nullable()->comment('路径');
            $table->integer('level')->nullable()->comment('层级');
            $table->integer('sort')->nullable()->comment('排序号');
            $table->integer('is_root')->nullable()->comment('是否根节点');
            $table->integer('is_open')->nullable()->comment('是否开启');
            $table->string('pinyin', 100)->nullable()->comment('拼音');
            $table->string('title', 100)->nullable()->comment('标题');
            $table->string('keyword', 100)->nullable()->comment('关键字');
            $table->string('description', 100)->nullable()->comment('描述');
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
        Schema::dropIfExists('columns');
    }
}
