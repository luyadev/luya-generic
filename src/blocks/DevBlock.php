<?php

namespace luya\generic\blocks;

use luya\generic\Module;
use luya\generic\blockgroups\DevelopmentGroup;
use luya\generic\BaseGenericBlock;

/**
 * Development Block in order to print data.
 *
 * @author Basil Suter <basil@nadar.io>
 * @since 1.0.0
 */
final class DevBlock extends BaseGenericBlock
{
    /**
     * @inheritdoc
     */
    public $module = 'cms';

    /**
     * @inheritdoc
     */
    public function blockGroup()
    {
        return DevelopmentGroup::className();
    }
    
    /**
     * @inheritdoc
     */
    public function name()
    {
        return Module::t('block_dev_name');
    }

    /**
     * @inheritdoc
     */
    public function icon()
    {
        return 'developer_mode';
    }

    /**
     * @inheritdoc
     */
    public function config()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function admin()
    {
        return '<p>' . Module::t('block_dev_name') . '</p>';
    }
    
    /**
     * @inheritdoc
     */
    public function getIsDirtyDialogEnabled()
    {
        return false;
    }
}
