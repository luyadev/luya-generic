<?php

namespace luya\generic\blockgroups;

use luya\cms\base\BlockGroup;
use luya\generic\Module;

/**
 * Development Block Group.
 *
 * @author Basil Suter <basil@nadar.io>
 * @since 1.0.0
 */
class DevelopmentGroup extends BlockGroup
{
    public function identifier()
    {
        return 'development-group';
    }
    
    public function label()
    {
        return Module::t('block_group_dev_elements');
    }
    
    public function getPosition()
    {
        return 90;
    }
}
