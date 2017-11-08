<?php

namespace cmstests\src\frontend\blocks;

use luya\generic\tests\GenericBlockTestCase;

class ListBlockTest extends GenericBlockTestCase
{
    public $blockClass = 'luya\generic\blocks\ListBlock';
    
    public function testEmpty()
    {
        $this->assertSame('', $this->renderFrontendNoSpace());
    }
    
    public function testElements()
    {
        $this->block->setVarValues(['elements' => [['value' => 1], ['value' => 2]]]);
        $this->assertSame('<ul><li>1</li><li>2</li></ul>', $this->renderFrontendNoSpace());
    }
    
    public function testElementsOl()
    {
        $this->block->setVarValues(['elements' => [['value' => 1], ['value' => 2]], 'listType' => 'ol']);
        $this->assertSame('<ol><li>1</li><li>2</li></ol>', $this->renderFrontendNoSpace());
    }
}
