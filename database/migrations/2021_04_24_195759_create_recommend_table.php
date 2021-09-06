<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecommendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommend', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->nullable()->comment('名称');
            $table->integer('sort')->nullable()->comment('排序号');
            $table->integer('column_id')->nullable()->comment('栏目ID');
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
        Schema::dropIfExists('recommend');
    }
}
