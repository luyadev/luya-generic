<?php

namespace luya\generic\blockgroups;

use luya\cms\base\BlockGroup;
use luya\generic\Module;

/**
 * Media Block Group.
 *
 * @author Basil Suter <basil@nadar.io>
 * @since 1.0.0
 */
class MediaGroup extends BlockGroup
{
    public function identifier()
    {
        return 'media-group';
    }
    
    public function label()
    {
        return Module::t('block_group_media_group');
    }
    
    public function getPosition()
    {
        return 62;
    }
}
