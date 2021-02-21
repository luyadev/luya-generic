<?php

namespace luya\generic\blocks;

use luya\generic\Module;
use luya\cms\helpers\BlockHelper;
use luya\generic\BaseGenericBlock;

/**
 * File list block.
 *
 * @author Basil Suter <basil@nadar.io>
 * @since 1.0.0
 */
final class FileListBlock extends BaseGenericBlock
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
        return Module::t('block_file_list_name');
    }

    /**
     * @inheritdoc
     */
    public function icon()
    {
        return 'attachment';
    }

    /**
     * @inheritdoc
     */
    public function config()
    {
        return [
            'vars' => [
                ['var' => 'files', 'label' => Module::t("block_file_list_files_label"), 'type' => 'zaa-file-array-upload'],
                ['var' => 'listType', 'label' => Module::t('block_list_listtype_label'), 'initvalue' => 'ul', 'type' => self::TYPE_SELECT, 'options' => [
                        ['value' => 'ul', 'label' => Module::t('block_list_listtype_ul')],
                        ['value' => 'ol', 'label' => Module::t('block_list_listtype_ol')],
                    ],
                ],
            ],
            'cfgs' => [
                ['var' => 'listCssClass', 'label' => Module::t('block_cfg_list_css_class'), 'type' => self::TYPE_TEXT],
                ['var' => 'elementCssClass', 'label' => Module::t('block_cfg_element_css_class'), 'type' => self::TYPE_TEXT],
                ['var' => 'showType', 'label' => Module::t("block_file_list_files_showtype_label"), 'initvalue' => 0, 'type' => 'zaa-select', 'options' => [
                        ['value' => '1', 'label' => Module::t("block_file_list_showtype_yes")],
                        ['value' => '0', 'label' => Module::t("block_file_list_showtype_no")],
                    ],
                ],
            ],
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function extraVars()
    {
        return [
            'listType' => $this->getVarValue('listType', 'ul'),
            'fileList' => BlockHelper::fileArrayUpload($this->getVarValue('files')),
        ];
    }

    /**
     * @inheritdoc
     */
    public function admin()
    {
        return '{% if extras.fileList is empty %}<p class="block__empty-text">'.Module::t('block_file_list_admin_empty').'</p>{% else %}<ul>{% for fileEntry in extras.fileList %}<li><a target="_blank" href="{{ fileEntry.href }}">{{ fileEntry.caption }}{% if cfgs.showType == 1 %} ({{ fileEntry.extension }}){% endif %}</a></li>{% endfor %}</ul>{% endif %}';
    }
}
