<?php

namespace App\Admin\Controllers;

use Encore\Admin\Widgets\Form;
use Illuminate\Http\Request;

class Setting extends Form
{
    public $title = '页面标题';

    public $description = '页面介绍';

    /**
     * Handle the form request.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request)
    {
        dd($request->all());
        admin_success('Processed successfully.');

        return back();
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->text('title', '标题')->rules('required');
        $this->text('sub_title', '副标题')->rules('required');
        $this->text('logo_title', 'logo标题')->rules('required');
        $this->image('header_image', '默认封面图')->rules('required');
        $this->email('email', '邮箱')->rules('required');
        $this->text('footer_text', '底部文字')->rules('required');
    }

    /**
     * The data of the form.
     *
     * @return array $data
     */
    public function data()
    {
        return [
            'title'       => 'Let Be The One',
            'sub_title'      => 'to make different',
            'logo_title'      => 'MMMX17',
            'email'      => '1156381157@qq.com',
            'footer_text' => '© 2022 MaXiao',
        ];
    }
}
