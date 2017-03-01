<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->comment('菜单名称');
            $table->integer('parent_id', 20)->comment('父节点');
            $table->string('url', 20)->comment('链接');
            $table->string('descrption', 60)->comment('描述');
            $table->integer('target')->comment('打开方式');
            $table->integer('status')->comment('状态');
            $table->integer('sort_num')->comment('排序');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
