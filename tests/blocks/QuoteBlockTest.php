<?php

namespace cmstests\src\frontend\blocks;

use luya\generic\tests\GenericBlockTestCase;

class QuoteBlockTest extends GenericBlockTestCase
{
    public $blockClass = 'luya\generic\blocks\QuoteBlock';
    
    public function testEmptyRender()
    {
        $this->assertSame('', $this->renderFrontendNoSpace());
    }
    
    public function testcContentRender()
    {
        $this->block->setVarValues(['content' => 'quote text!']);
        $this->assertSame('<blockquote>quote text!</blockquote>', $this->renderFrontendNoSpace());
    }
}
