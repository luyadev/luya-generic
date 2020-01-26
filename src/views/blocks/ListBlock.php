<?php
/**
 * @var \luya\cms\base\PhpBlockView $this
 */

use luya\cms\helpers\BlockHelper;
use yii\helpers\Markdown;

?>
<?php if (!empty($this->varValue('elements'))): ?>
<<?= $this->extraValue('listType', 'ul'); ?><?=$this->cfgValue('listCssClass', null, ' class="{{listCssClass}}"')?>>
    <?php foreach ($this->varValue('elements') as $item): ?>
    <li<?= $this->cfgValue('elementCssClass', null, ' class="{{elementCssClass}}"')?>><?= $this->cfgValue('textType') == 1 ? Markdown::processParagraph($item['value']) : $item['value']; ?></li>
    <?php endforeach; ?>
</<?= $this->extraValue('listType', 'ul'); ?>>
<?php endif; ?>
