<?php

namespace cmstests\src\frontend\blocks;

use luya\generic\tests\GenericBlockTestCase;

class DevBlockTest extends GenericBlockTestCase
{
    public $blockClass = 'luya\generic\blocks\DevBlock';
    
    public function testRenderFrontend()
    {
        $this->assertNotEmpty($this->renderFrontend());
    }
}
