<?php

namespace luya\generic;

/**
 * Generic Module
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
            'generic' => 'generic.php',
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
