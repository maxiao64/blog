<?php

namespace App\Admin\Controllers;

use App\Model\WebSetting;
use Encore\Admin\Widgets\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Setting extends Form
{
    public $title = '网站设置';

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
        $params = $request->all();
        foreach($params as $k => $v) {
            if($k == 'header_image') {
                $v = $request->header_image->store('/setting',['disk' => 'admin']);
            }
            WebSetting::query()->where('key', $k)
            ->update(['value' => $v]);
        }
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
        $this->image('header_image', '默认封面图')->removable();
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
        $data = [];
        $webSettings = WebSetting::query()->get()->toArray();
        foreach($webSettings as $val) {
            $data[$val['key']] = $val['value'];
        }
        return $data;
    }
}
