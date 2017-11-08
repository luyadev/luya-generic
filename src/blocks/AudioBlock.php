<?php

namespace luya\generic\blocks;

use luya\generic\Module;
use luya\generic\blockgroups\MediaGroup;
use luya\cms\base\PhpBlock;
use luya\generic\BaseGenericBlock;

/**
 * Audio Block for Soundcloude Service
 *
 * @author Basil Suter <basil@nadar.io>
 * @since 1.0.0
 */
final class AudioBlock extends BaseGenericBlock
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
        return Module::t('block_audio_name');
    }

    /**
     * @inheritdoc
     */
    public function blockGroup()
    {
        return MediaGroup::class;
    }
    
    /**
     * @inheritdoc
     */
    public function icon()
    {
        return 'volume_up';
    }

    /**
     * @inheritdoc
     */
    public function config()
    {
        return [
           'vars' => [
                ['var' => 'soundUrl', 'label' => 'Embeded Code', 'type' => 'zaa-text'],
           ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function getFieldHelp()
    {
        return [
            'soundUrl' => Module::t('block_audio_help_soundurl'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function admin()
    {
        return '<p>Audio Block: {% if vars.soundUrl is empty %}'.Module::t('block_audio_admin_nourl').'{% else %}'.Module::t('block_audio_admin_hasurl').'{% endif %}</p>';
    }
}
