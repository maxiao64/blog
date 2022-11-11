<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class FillSystemMenuToAdminMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('admin_menu')->insert([
            [
                'parent_id' => 0,
                'order' => 1,
                'title' => '文章管理',
                'icon'  => 'fa-bars',
                'uri'   => 'posts',
                'permission' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'parent_id' => 8,
                'order' => 2,
                'title' => '分类',
                'icon'  => 'fa-calendar-minus-o',
                'uri'   => 'categories',
                'permission' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'parent_id' => 0,
                'order' => 4,
                'title' => '友链',
                'icon'  => 'fa-link',
                'uri'   => 'links',
                'permission' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'parent_id' => 0,
                'order' => 5,
                'title' => '日志',
                'icon'  => 'fa-search',
                'uri'   => 'logs',
                'permission' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'parent_id' => 0,
                'order' => 6,
                'title' => '网站设置',
                'icon'  => 'fa-gear',
                'uri'   => 'setting',
                'permission' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'parent_id' => 8,
                'order' => 3,
                'title' => '评论',
                'icon'  => 'fa-comment',
                'uri'   => 'comments',
                'permission' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'parent_id' => 8,
                'order' => 0,
                'title' => '文章列表',
                'icon'  => 'fa-align-center',
                'uri'   => 'posts',
                'permission' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
