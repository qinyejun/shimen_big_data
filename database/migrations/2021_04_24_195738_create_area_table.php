<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable()->comment('名称');
            $table->string('path', 100)->nullable()->comment('路径');
            $table->integer('level')->nullable()->comment('层级');
            $table->integer('sort')->nullable()->comment('排序号');
            $table->integer('is_root')->nullable()->comment('是否根节点');
            $table->integer('is_open')->nullable()->comment('是否开启');
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
        Schema::dropIfExists('area');
    }
}
