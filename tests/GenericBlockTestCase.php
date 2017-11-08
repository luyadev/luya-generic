<?php

namespace luya\generic\tests;

use luya\testsuite\cases\CmsBlockTestCase;

abstract class GenericBlockTestCase extends CmsBlockTestCase
{
    public function getConfigArray()
    {
        return [
            'id' => 'audioblock',
            'basePath' => __DIR__,
        ];
    }
}