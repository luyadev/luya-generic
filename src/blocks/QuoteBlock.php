<?php

namespace luya\generic\blocks;

use luya\generic\Module;
use luya\generic\BaseGenericBlock;
use luya\cms\frontend\blockgroups\TextGroup;

/**
 * Blockquote Block.
 *
 * @author Basil Suter <basil@nadar.io>
 * @since 1.0.0
 */
final class QuoteBlock extends BaseGenericBlock
{
    /**
     * @inheritdoc
     */
    public $cacheEnabled = true;
    
    /**
     * @inheritdoc
     */
    public function name()
    {
        return Module::t('block_quote_name');
    }
    
    /**
     * @inheritdoc
     */
    public function blockGroup()
    {
        return TextGroup::class;
    }

    /**
     * @inheritdoc
     */
    public function icon()
    {
        return 'format_quote';
    }

    /**
     * @inheritdoc
     */
    public function config()
    {
        return [
            'vars' => [
                ['var' => 'content', 'label' => Module::t('block_quote_content_label'), 'type' => self::TYPE_TEXT],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function admin()
    {
        return '{% if vars.content is not empty %}<blockquote><p>{{ vars.content }}</p></blockquote>{% else %}<span class="block__empty-text">' . Module::t('block_quote_no_content') . '</span>{% endif %}';
    }
}
