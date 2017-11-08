<?php

namespace luya\generic;

use luya\cms\base\PhpBlock;

abstract class BaseGenericBlock extends PhpBlock
{
    public function getViewPath()
    {
        return  dirname(__DIR__) . '/src/views/blocks';
    }
}