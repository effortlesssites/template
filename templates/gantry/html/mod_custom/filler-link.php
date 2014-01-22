<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>


<div class="module-filler-link custom">
	<?php if ($params->get('backgroundimage')) : ?>
	<div class="module-content-top">
		<img class="full-width" src="<?php echo $params->get('backgroundimage');?>" />
	</div>
	<?php endif;?>
	<div class="module-content-main<?php if (empty($module->content)) : ?> empty<?php endif;?>">
		<?php echo $module->content;?>
	</div>
	<?php if ($params->get('link') || $params->get('hyperlink')) : ?>
		<div class="module-content-bottom" style="padding: 0px;">
		<?php if ($params->get('link')) : ?>
			<a href="index.php?Itemid=<?php echo $params->get('link');?>" class="filler">#</a>
		<?php else : ?>
			<a target="_blank" href="<?php echo $params->get('hyperlink');?>" class="filler">#</a>
		<?php endif;?>
		</div>
	<?php endif;?>
</div>