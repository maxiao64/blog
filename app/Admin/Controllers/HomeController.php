<?php

namespace App\Admin\Controllers;

use App\Admin\Forms\Setting;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Row;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Encore\Admin\Layout\Content;
use Qiniu\Config;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Dashboard')
            ->description('Description...')
            ->row(Dashboard::title())
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
    }

    public function upload(Request $request)
    {
        $path = $request->file('upload_file')->store('post');

        return [
            'success' => true,
            'file_path' => Storage::url($path),
        ];
    }

    public function getQnToken()
    {
        // dd(config('filesystems.disks.qiniu.access_key'));
        $qnConfig = new Config();
        $qnConfig->useHTTPS = env('IS_HTTPS_APP');
        list($uphost, $error) = $qnConfig->getUpHostV2(config('filesystems.disks.qiniu.access_key') , config('filesystems.disks.qiniu.bucket'));
        if($error) {
            return [];
        }
        return [
            'uphost' => $uphost,
            'domain' => config('filesystem.disks.qiniu.domains.default'),
            'uptoken' => Storage::disk('qiniu')->getAdapter()->uploadToken()
        ];
    }
}
