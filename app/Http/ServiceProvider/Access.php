<?php
/**
 * Created by PhpStorm.
 * User: narde
 * Date: 29/6/2019
 * Time: 16:01
 */

namespace recreo\Http\ServiceProvider;

use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class Access
{
    public function compose(View $view)
    {
        $access = File::get(storage_path('app/public/access.txt'));

        $view->with([
           'access' => $access,
        ]);
    }
}