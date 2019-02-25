<?php
/**
 * @var $this \luya\cms\base\PhpBlockView
 */
?>
<?php if (!empty($this->varValue('elements'))): ?>
<<?= $this->extraValue('listType', 'ul'); ?><?=$this->cfgValue('listCssClass', null, ' class="{{listCssClass}}"')?>>
    <?php foreach ($this->varValue('elements') as $item): ?>
    <li<?=$this->cfgValue('elementCssClass', null, ' class="{{elementCssClass}}"')?>><?= $item['value']; ?></li>
    <?php endforeach; ?>
</<?= $this->extraValue('listType', 'ul'); ?>>
<?php endif; ?>
