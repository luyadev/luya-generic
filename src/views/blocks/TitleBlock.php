<?php
/**
 * @var \luya\cms\base\PhpBlockView $this
*/
?>
<?php if (!empty($this->varValue('content'))): ?>
<<?= $this->varValue('headingType', 'h2') . $this->cfgValue('cssClass', null, ' class="{{cssClass}}"'); ?>>
<?= $this->varValue('content'); ?>
<?= $this->varValue('headingType', 'h2', '</{{headingType}}>'); ?>
<?php endif; ?>