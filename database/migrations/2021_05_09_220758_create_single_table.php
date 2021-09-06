<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('single', function (Blueprint $table) {
            $table->id();
            $table->string('type', 100)->nullable()->comment('单页类型');
            $table->string('name', 100)->nullable()->comment('标题');
            $table->string('keyword', 250)->nullable()->comment('关键字');
            $table->text('content')->nullable()->comment('内容');
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
        Schema::dropIfExists('single');
    }
}
