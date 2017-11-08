<?php

namespace cmstests\src\frontend\blocks;

use luya\generic\tests\GenericBlockTestCase;

class WysiwygBlockTest extends GenericBlockTestCase
{
    public $blockClass = 'luya\generic\blocks\WysiwygBlock';

    public function testEmpty()
    {
        $this->assertSame('', $this->renderFrontendNoSpace());
    }

    public function testContent()
    {
        $this->block->setVarValues(['content' => 'content']);
        $this->assertSame('content', $this->renderFrontendNoSpace());
    }
}
