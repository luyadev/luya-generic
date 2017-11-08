<?php

namespace luya\generic;

use Yii;

/**
 * Bootstrap4 Module
 *
 * When adding this module to your configuration the bootstrap4 block will be added to your
 * cmsadministration by running the `import` command.
 *
 * @author Basil Suter <basil@nadar.io>
 */
class Module extends \luya\base\Module
{
    /**
     * @inheritdoc
     */
    public static function onLoad()
    {
        self::registerTranslation('generic*', static::staticBasePath() . '/messages', [
            'fileMap' => [
                'generic' => 'generic.php',
            ],
        ]);
    }
    
    /**
     * Translations
     *
     * @param string $message
     * @param array $params
     * @return string
     */
    public static function t($message, array $params = [])
    {
        return parent::baseT('generic', $message, $params);
    }
}
