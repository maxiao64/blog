<?php

namespace App\Admin\Controllers;

use App\Model\Category;
use App\Model\Post;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class PostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post());
        $grid->column('id', __('Id'));
        $grid->column('title', __('标题'))->expand(function ($model) {
            return $model->body;
        });
        $grid->column('category.name', __('分类'));
        $grid->column('created_at', __('创建时间'));
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Post::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('标题'));
        $show->field('body', __('内容'));
        $show->category('分类', function ($author) {
            $author->setResource('/admin/categories');
            $author->id();
            $author->name();
        });
        $show->field('created_at', __('创建时间'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Post());
        $form->text('title');
        $form->simditor('body');
        $form->select('cate_id')->options(Category::query()->get()->pluck('name', 'id'));
        return $form;
    }
}
