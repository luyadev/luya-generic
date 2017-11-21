<?php

namespace luya\generic\tests\data\modules\controllers;

use luya\web\Controller;

class FooController extends Controller
{
    public function actionBar()
    {
        return 'cmsunitmodule/foo/bar';
    }
}
