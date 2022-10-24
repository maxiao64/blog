<?php

namespace App\Admin\Controllers;

use App\Model\WebSetting;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WebSettingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'WebSetting';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new WebSetting());

        $grid->column('id', 'ID');
        $grid->column('key', 'key');
        $grid->column('value', 'value');
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
        $show = new Show(WebSetting::findOrFail($id));

        $show->field('id', 'ID');
        $show->field('key', 'key');
        $show->field('value', 'value');
        $show->field('created_at', '创建时间');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new WebSetting());

        $form->text('key', 'key');
        $form->text('value', 'value');

        return $form;
    }
}
