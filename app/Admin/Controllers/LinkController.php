<?php

namespace App\Admin\Controllers;

use App\Model\Link;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class LinkController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Link';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Link());

        $grid->column('id', 'id');
        $grid->column('name', '网站名称');
        $grid->column('link', '🔗');
        $grid->column('order', '排序（升序）');
        $grid->column('created_at', '创建时间');

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
        $show = new Show(Link::findOrFail($id));

        $show->field('id', 'id');
        $show->field('name', '网站名称');
        $show->field('link', '🔗');
        $show->field('order', '排序（升序）');
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Link());

        $form->text('name', '网站名称');
        $form->url('link', '🔗');
        $form->number('order', '排序（升序）')->default(0);
        return $form;
    }
}
