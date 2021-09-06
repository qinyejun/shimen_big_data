<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250)->nullable()->comment('标题');
            $table->string('sub_title', 200)->nullable()->comment('副标题');
            $table->integer('area_id')->nullable()->comment('地区id');
            $table->string('tags', 250)->nullable()->comment('标签');
            $table->enum('status', ['active', 'inactive'])->nullable()->comment('审核状态');
            $table->integer('recommend_id')->nullable()->comment('推荐位');
            $table->integer('column_id')->nullable()->comment('栏目');
            $table->string('thumb_img', 250)->nullable()->comment('缩略图');
            $table->string('description', 200)->nullable()->comment('描述');
            $table->text('detail')->nullable()->comment('详情');
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
        Schema::dropIfExists('content');
    }
}
