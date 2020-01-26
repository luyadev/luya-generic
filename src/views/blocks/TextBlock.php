<?php
/**
 * @var \luya\cms\base\PhpBlockView $this
*/
$cssClass = $this->cfgValue('cssClass');
?>
<?php if ($this->varValue('textType') == 0): ?>
<p<?= $this->cfgValue('cssClass', null, ' class="{{cssClass}}"'); ?>><?= $this->extraValue('text'); ?></p>
<?php else: ?>
<?php if ($cssClass): ?><div class="<?= $cssClass; ?>"><?php endif; ?>
<?= $this->extraValue('text'); ?>
<?php if ($cssClass): ?></div><?php endif; ?>
<?php endif; ?>