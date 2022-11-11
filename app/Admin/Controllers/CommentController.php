<?php

namespace App\Admin\Controllers;

use App\Model\Comment;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CommentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Comment';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Comment());
        $grid->model()->orderBy('status', 'asc')->orderBy('id', 'desc');

        $grid->column('id', __('Id'));
        $grid->column('post_id', __('文章id'));
        $grid->column('content', __('评论内容'));
        $grid->column('status', __('状态'))->radio(Comment::STATUS_TEXT);
        $grid->column('from_uid', __('评论人uid'));
        $grid->column('from_username', __('评论人姓名'));
        $grid->column('to_uid', __('被评论人uid'));
        $grid->column('to_username', __('被评论人姓名'));
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
        $show = new Show(Comment::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('post_id', __('文章id'));
        $show->field('content', __('评论内容'));
        $show->field('status', __('状态'))->using(Comment::STATUS_TEXT);
        $show->field('from_uid', __('评论人uid'));
        $show->field('from_username', __('评论人姓名'));
        $show->field('to_uid', __('被评论人uid'));
        $show->field('to_username', __('被评论人姓名'));
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
        $form = new Form(new Comment());

        $form->text('post_id', __('文章id'))->readonly();
        $form->textarea('content', __('评论内容'))->readonly();
        $form->radio('status', __('状态'))->options(Comment::STATUS_TEXT);
        $form->text('from_uid', __('评论人uid'))->readonly();
        $form->text('from_username', __('评论人姓名'))->readonly();
        $form->text('to_uid', __('被评论人uid'))->readonly();
        $form->text('to_username', __('被评论人姓名'))->readonly();

        return $form;
    }
}
