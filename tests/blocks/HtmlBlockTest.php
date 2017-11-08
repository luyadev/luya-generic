<?php

namespace cmstests\src\frontend\blocks;

use luya\generic\tests\GenericBlockTestCase;

class HtmlBlockTest extends GenericBlockTestCase
{
    public $blockClass = 'luya\generic\blocks\HtmlBlock';

    public function testRenderFrontend()
    {
        $this->assertEquals('', $this->renderFrontend());
    }
    
    public function testInputHtml()
    {
        $this->block->setVarValues([
            'html' => '<div class="foo">Hello World</div>',
        ]);
        
        $this->assertSame('<div class="foo">Hello World</div>', $this->renderFrontendNoSpace());
    }
    
    public function testAdminRawOutput()
    {
        $this->block->setVarValues([
            'html' => '<p>hello</p>',
        ]);
        
        $this->assertSame('<code>&lt;p&gt;hello&lt;/p&gt;</code>', $this->renderAdminNoSpace());
        
        $this->block->setCfgValues(['raw' => 1]);
        
        $this->assertSame('<p>hello</p>', $this->renderAdminNoSpace());
    }
}
