<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function head()
    {
        $sharedVariable = '共用變數的值';

        return $sharedVariable;

    }
}
