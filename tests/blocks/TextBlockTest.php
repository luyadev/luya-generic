<?php

namespace cmstests\src\frontend\blocks;

use luya\generic\tests\GenericBlockTestCase;

class TextBlockTest extends GenericBlockTestCase
{
    public $blockClass = 'luya\generic\blocks\TextBlock';
    
    public function testEmpty()
    {
        $this->assertSame('<p></p>', $this->renderFrontendNoSpace());
    }
    
    public function testText()
    {
        $this->block->setVarValues(['content' => 'text']);
        $this->assertSame('<p>text</p>', $this->renderFrontendNoSpace());
    }
    
    public function testNl2br()
    {
        $this->block->setVarValues(['content' => 'text
test']);
        $this->assertSame('<p>text<br />test</p>', $this->renderFrontendNoSpace());
    }

    public function testNoMarkdownButMarkup()
    {
        $this->block->setVarValues(['content' => '##text', 'textType' => 0]);
        $this->assertSame('<p>##text</p>', $this->renderFrontendNoSpace());
    }
    
    public function testMarkdownRender()
    {
        $this->block->setVarValues(['content' => '##text', 'textType' => 1]);
        $this->assertSame('<h2>text</h2>', $this->renderFrontendNoSpace());
    }
    
    public function testCfgValue()
    {
        $this->block->setVarValues(['content' => 'text']);
        $this->block->setCfgValues(['cssClass' => 'test']);
        $this->assertSame('<p class="test">text</p>', $this->renderFrontendNoSpace());
    }
    
    public function testCfgWithMarkdown()
    {
        $this->block->setVarValues(['content' => '##text', 'textType' => 0]);
        $this->block->setCfgValues(['cssClass' => 'test']);
        $this->assertSame('<p class="test">##text</p>', $this->renderFrontendNoSpace());
    }
    
    public function testCfgWithMarkdownAndClass()
    {
        $this->block->setVarValues(['content' => '##text', 'textType' => 1]);
        $this->block->setCfgValues(['cssClass' => 'test']);
        $this->assertSame('<div class="test"><h2>text</h2></div>', $this->renderFrontendNoSpace());
    }
}
