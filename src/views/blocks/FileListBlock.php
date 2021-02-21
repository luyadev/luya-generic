<?php
/**
 * @var \luya\cms\base\PhpBlockView $this
*/
?>
<?php if (!empty($this->extraValue('fileList'))): ?>
<<?= $this->extraValue('listType', 'ul'); ?><?=$this->cfgValue('listCssClass', null, ' class="{{listCssClass}}"')?>>
	<?php foreach ($this->extraValue('fileList') as $file): ?>
		<li<?= $this->cfgValue('elementCssClass', null, ' class="{{elementCssClass}}"')?>><a target="_blank" href="<?= $file['href']; ?>"><?= $file['caption']; ?><?php if ($this->cfgValue('showType')): ?> (<?= $file['extension'];?>)<?php endif; ?></a></li>
	<?php endforeach; ?>
</<?= $this->extraValue('listType', 'ul'); ?>>
<?php endif; ?>