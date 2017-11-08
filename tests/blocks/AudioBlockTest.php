<?php

namespace luya\generic\tests\blocks;

use luya\generic\tests\GenericBlockTestCase;

class AudioBlockTest extends GenericBlockTestCase
{
    public $blockClass = 'luya\generic\blocks\AudioBlock';
    
    public function testEmpty()
    {
        $this->assertSame('asdf', $this->block->name());
        $this->assertSame('', $this->block->renderFrontend());
    }
    
    public function testContent()
    {
        $this->block->setVarValues(['soundUrl' => 'embed']);
        $this->assertContains('<div>embed</div>', $this->block->renderFrontend());
    }
}
